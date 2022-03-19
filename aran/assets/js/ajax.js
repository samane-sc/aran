jQuery(document).ready(function ($) {
    $('#contact_btn').on('click', function (event) {
        event.preventDefault();
        var name = $("#contactname").val();
        var content = $("#contactcontent").val();
        var email = $("#contactemail").val();

        $.ajax({
            url: data.ajax_url,
            type: 'post',
            data: {
                action: 'contact_ajax',
                name: name,
                content: content,
                email: email,
            },
            success: function (result) {
                if (!result.error) {
                    alert(result.msg);
                } else {
                    alert(result.msg);
                }
            },
            error: function (error) {
                if (error.error) {
                    alert(error.msg);
                }
            }
        });
    });
});
jQuery(document).ready(function ($) {
    $(".more-portfolio").click(function (e) {
        // e.preventDefault();
        var $this = $(this);
        var $this_text = $this.text();
        $this.text('. . .');
        var $page = parseInt($this.attr("data-page"));

        $.ajax({
            url: data.ajax_url,
            type: 'post',
            data: {
                action: 'load_page_ajax',
                page: $page
            },
            success: function (response) {
                if (response) {
                    var content = response['content'];
                    if(content.length > 0) {
                        $this.before(content);
                        if(response['total_pages'] == $page){
                            $this.css('display','none');
                        }else {
                            $(".more-portfolio").attr('data-page',$page+1);
                        }

                    }
                }
                $this.text($this_text);
            },
            error: function (err) {
                // debugger;
                // console.log(err);
            }

        });
    });
});
jQuery(document).ready(function ($) {
    $(".more-services").click(function (e) {
        // e.preventDefault();
        var $this = $(this);
        var $this_text = $this.text();
        $this.text('. . .');
        var $page = parseInt($this.attr("data-page"));
        console.log($page);
        $.ajax({
            url: data.ajax_url,
            type: 'post',
            data: {
                action: 'load_service_ajax',
                page: $page
            },
            success: function (response) {
                if (response) {
                    var content = response['content'];
                    if(content.length > 0) {
                        $this.before(content);
                        // debugger;
                        if(response['total_pages'] == $page){
                            $this.css('display','none');
                        }else {
                            $(".more-services").attr('data-page',$page+1);
                        }

                    }
                }
                $this.text($this_text);
            },
            error: function (err) {
                debugger;
                // console.log(err);
            }

        });
    });
});
