/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var twillo = { 
    url: "twilo",
    delete : function(txtNum){ $.ajax({
                                    type: "DELETE",
                                    url: this.url,
                                    data: txtNum } ) 
                                 };
                                 updateTable();, 
               post: , put:};