$(document).ready(function() {
    $(".list").on({
        click: function() {
            $(".baoham").animate({right: "0px"});
        }
    })
    $(".exp_route").on({
        mouseover: function() {
            $(this).css("background-color", "#25631b");
            // $(this).p.css("font-size", "20px");
        },
        mouseout: function() {
            $(this).css("background-color", "#87b26b");
            // $(this).css("font-size", "16px");
        },
        click: function() {
            $("#title_exp").slideUp(1).html($(this).text()).slideDown(1000);
            $("#href_exp").attr("href", $(this).attr("url"));
            $("#body_exp").css("height", "600px");
            $("#body_exp").slideDown(1).slideUp(1000);
            var hinh = $(this).attr("urlHinh")
            $(".exp-right embed").removeAttr("internalinstanceid");
            $(".exp-right embed").attr("src", hinh);
            $("#title_exp").on({
                mouseover: function() {
                    $(this).css("color", "red");
                },
                mouseout: function() {
                    $(this).css("color", "#87b26b");
                }
            })
        }
    })
})