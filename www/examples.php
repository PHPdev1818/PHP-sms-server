<?php

/* 
 * this class shows examples of orginal code I have written in the past
 * CodeIgnitor CI_Model is used but not all member functions shown belong in the model
 *
 */
use Aws\S3\Command;
use Aws\S3\S3Client;

class examples extends CI_Model { 
    protected $num;
    protected $qty;
    protected $size;

    /*
     * we get the size of the shopping cart
     */
    public function __construct(){
        $this->size= sizeof($_SESSION['cart']['item']);
    }
    
    /* 
     * user is verfied by testing post values 
     * if values exist the database is queried and T/F is retruned 
     */
    public function userverify () {
        if  (!isset($_POST['user']) && !isset($_POST['pw']))
            return false;
        
        $Q = "select id from user where username = ? and pw = ?";
        $result = $this->db->query($Q, array($_POST['user'], $_POST['pw']));
        return $result->num_rows() > 0;
    }

    /*
     * post values are tested for being numeric
     * once verfied the itemnu is quired to ensure item exists
     * if true items are added to session
     */
    protected function cartadjust(){
        if( !isset($_POST['qty']) || !is_numeric($_POST['qty']) || !isset($_POST['num']) || !is_numeric($_POST['qty']) )
            return false;
        $this->num = intval($_POST['num']);
        $this->qty = intval($_POST['qty']);
        
        $Q = "select qty from inven where itemnum = ? ";
        $result = $this->db->query($Q, array($this->num));
        if ($result->num_rows() === 0)
            return false;
        
        $row = $query->row(); 
        $this->qty = $row['qty'];
        if( $this->qty < 1) {
            unset($_SESSION['cart'][$this->num] );
        } else { 
            $_SESSION['cart'][$this->num] = $this->qty;
        }
        return true;
    }
    
    /*
     * A blank template is created to place the image on.
     */
    public function imagewhite(){
        $this->im = imagecreatetruecolor(400, 400);
        $white = imagecolorallocate($im, 255, 255, 255);
        imagefilledrectangle($im, 0, 0, 399, 399, $white);
    }

    /*
     * $imtmp holds the uploaded image, also the image height width and percent it will be reduced 
     * are passed. A blank canvas is created. with imagewhite(). 
     * the reduced height and width are calculated, follwed by the x and y offset calculations. 
     * The canvas and image are merged with imagecopyresize().
     */
    public function imageresize ($imtmp,$height,$width,$percent){
        $this->imagewhite();

        $newwidth = $width * $percent;
        $newheight = $height * $percent;

        $xoffset = (400-($width * $percent))/2;
        $yoffset = (400-($height * $percent))/2;

        imagecopyresized($this->im, $imtmp, $xoffset, $yoffset, 0, 0, $newwidth, $newheight, $width, $height);
        imagedestroy($imtmp);
    }

    /*
     * Here we mark the image with the company name. the text will be black with a grey shadow. 
     * The texted is layed over the image with imagettftext, first the shadow then the black text.
     */
    public function mark($im){
        $grey = imagecolorallocate($this->im, 255, 255, 255);
        $black = imagecolorallocate($this->im, 120, 192, 255);

        $text = 'MyToys';
        $font = 'arial.ttf';

        imagettftext($this->im, 20, 0, 76, 201, $grey, $font, $text);
        imagettftext($this->im, 20, 0, 75, 200, $black, $font, $text);
    }
    
    /*
     * returns a presigned url to a private bucket
     */
    public function getTextUrl($fileName = "basic"){
        $s3 = new S3(Key, Secret);
        $bucket ="bucket";
        
        $file = $fileName.".txt";
        $span = 900;
        return $s3->getAuthenticatedURL($bucket, $file, $span,false,true);
    }
}