$(document).ready(function() {

    // xu li su kien khi chuot chi vao cac muc
    $(".muc").on({
        mouseover: function() {
            $(this).css("background-color", "#74777a");
        },
        mouseout: function() {
            $(this).css("background-color", "black");
        },
        click: function() {
            if($(this).hasClass("btn-modal-signin")) {
                $(".modal-sign").css("display", "block");
                $(".btn-modal-signin").css("background-color", "white");
                $(".btn-modal-signup").css("background-color", "#74777a");
                $(".modal-signin").css("display", "block"); 
                $(".modal-signup").css("display", "none");
                clicksign(); 
            }
            else if($(this).hasClass("btn-modal-signup")) {
                $(".modal-sign").css("display", "block");
                $(".btn-modal-signup").css("background-color", "white");
                $(".btn-modal-signin").css("background-color", "#74777a");
                $(".modal-signup").css("display", "block"); 
                $(".modal-signin").css("display", "none");
                clicksign();  
            }
            else {
                // $str = "?p="
                // $id = $(this).attr("id");
                // $url = $str1.concat($url);
                // alert($url);
                // window.history.pushState("", "", $url);
                // var $url1      = window.location.href; 
                // alert($url1 );
                $(this).css("background-color","#74777a");
                // $(this).next('.muc').css("background-color", "black");
                // $(this).prev('.muc').css("background-color", "black");
            }
        }
    })
    
    function clicksign() {
        $(".sign-header").click(function() {
            $(this).css("background-color", "white");
            if($(this).hasClass("btn-modal-signin")) {
                $(this).next('div').css("background-color", "#74777a");
                $(".modal-signin").css("display", "block"); 
                $(".modal-signup").css("display", "none"); 
            }
            else {
                $(this).prev('div').css("background-color", "#74777a");
                $(".modal-signup").css("display", "block"); 
                $(".modal-signin").css("display", "none"); 
            }
        });
    };
    
    $("#over-close-modal").on({
        mouseover: function() {
            $(this).css("background-color", "rgba(0,0,0,0.2)");
        },
        mouseout: function() {
            $(this).css("background-color", "transparent");
        },
        click: function() {
            $(".modal-sign").css("display", "none");
        }
    })
}) 