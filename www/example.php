<?php

    ini_set('error_reporting', '1');
    ini_set('track_errors', '1');
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1'); //  define the error callback
    
    function __errorHandler() {      
        $args = func_get_args();      
        $count = func_num_args(); 
        PHPVideoToolkitTrace::vars('ERROR---------', $count === 1 ? 'exception' : 'error', $args);
    }
    set_error_handler('__errorHandler');
    set_exception_handler('__errorHandler');
    
    $basedir = dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR;
    define('BASE', $basedir);
 
    if(is_file(BASE.'vendor/autoload.php')) 
            require_once BASE.'vendor/autoload.php';
    require_once BASE.'autoloader.php';
    require_once BASE.'examples/includes/config.php';
    try {
        $video = new PHPVideoToolkitVideo($example_video_path, $config);
        $process = $video->getProcess();
        $output = $video->extractFrame(new PHPVideoToolkitTimecode('00:00:50.00'))
            ->save('./output/extract-frame.example2.jpg', null, PHPVideoToolkitMedia::OVERWRITE_UNIQUE);
        echo '<h1>Executed Command</h1>';
        PHPVideoToolkitTrace::vars($process->getExecutedCommand());
        echo '<hr /><h1>FFmpeg Process Messages</h1>';
        PHPVideoToolkitTrace::vars($process->getMessages());
        
        echo '<hr /><h1>Buffer Output</h1>';
        PHPVideoToolkitTrace::vars($process->getBuffer(true));
        echo '<hr /><h1>Resulting Output</h1>';
        PHPVideoToolkitTrace::vars($output->getOutput()->getMediaPath());
        
    } catch(PHPVideoToolkitFfmpegProcessOutputException $e) {
        echo '<h1>Error</h1>';
        PHPVideoToolkitTrace::vars($e);
        $process = $video->getProcess();
        
        if($process->isCompleted()) {
            echo '<hr /><h2>Executed Command</h2>';
            PHPVideoToolkitTrace::vars($process->getExecutedCommand());
            echo '<hr /><h2>FFmpeg Process Messages</h2>';
            
            PHPVideoToolkitTrace::vars($process->getMessages());
            echo '<hr /><h2>Buffer Output</h2>';
            PHPVideoToolkitTrace::vars($process->getBuffer(true));
        }
    } catch(PHPVideoToolkitException $e) {
        echo '<h1>Error</h1>';
        PHPVideoToolkitTrace::vars($e->getMessage());
        echo '<h2>\PHPVideoToolkit\Exception</h2>';
        PHPVideoToolkitTrace::vars($e);
    }

