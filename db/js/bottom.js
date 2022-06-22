jQuery('img.svg').each(function () {
  var $img = jQuery(this);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');

  jQuery.get(imgURL, function (data) {
    // Get the SVG tag, ignore the rest
    var $svg = jQuery(data).find('svg');

    // Add replaced image's ID to the new SVG
    if (typeof imgID !== 'undefined') {
      $svg = $svg.attr('id', imgID);
    }
    // Add replaced image's classes to the new SVG
    if (typeof imgClass !== 'undefined') {
      $svg = $svg.attr('class', imgClass + ' replaced-svg');
    }

    // Remove any invalid XML tags as per http://validator.w3.org
    $svg = $svg.removeAttr('xmlns:a');

    // Replace image with new SVG
    $img.replaceWith($svg);

  }, 'xml');

});


function hrefLink(that) {
  event.preventDefault();

  var href = $(that).attr('href');
  $('#myTab .nav-link.active').removeClass("active");
  $('#tab-content .tab-pane.active .ajaxhere').html("");
  $('#tab-content .tab-pane.active:not(#home)').removeClass("active");
  $(href).tab('show');
}
$('.tab-link').on('click', function(event) {
    // Prevent url change
    hrefLink(this);
    window.history.pushState("object or string", "Title", "./index.php");

});
function tabAjax(dis,e){
  e.preventDefault();

  var $this = dis,
    loadurl = $this.attr('href'),
    targ = $this.attr('data-target'),
    body = $(targ).find(".content-card > .card-body .ajaxhere");

  $(body).html("");
  $(targ).find(".card-header span").html("");

  window.history.pushState("object or string", "Title", loadurl);
  // $.get(loadurl, function(data) {
  //     $(targ).find(".content-card > .card-body").delay("fast").html(data);
  // });

  $.ajax({
    url: loadurl,
    beforeSend: function () {
      $(targ).find(".content-card .loading-page").show();
    },
    success: function (data) { // data what is sent back by the php page
      $(targ).find(".card-header span").hide().html($this.attr('title')).fadeIn();
      $(targ).find(".content-card .loading-page").hide();
      if ($(body).html() == "") {
        $(body).html(data);
      }
      setTimeout(
        function () {
          new SimpleBar($(targ).find(".content-card > .card-body")[0]);
          $(body).fadeIn();
        }, 200);

      $("[data-toggle='mediaView']").on({
        click: function (e) {
          e.preventDefault();
          $("#modalCustomer").modal("show");
        }
      });
      $("[data-toggle='subajax']").on('click', function () {
        e.preventDefault();

        var that = $(this),
          suburl = that.attr('href'),
          title = that.attr('title');
        // alert(suburl);
        if (suburl != "" || suburl != "#" ) {
          $.ajax({
            url: suburl,
            beforeSend: function () {
              $(body).hide();
              $(targ).find(".content-card .loading-page").show();

            },
            success: function (data) {
              $(targ).find(".content-card .loading-page").hide();
              $(body).html(data);
              window.history.pushState("object or string", "Title", suburl);

              // $(targ).find(".card-header a").removeClass("tab-link").addClass("tab-sublink").attr("href",loadurl);
              // $(targ).find(".card-header h4").append(`<span class="subtitle"> / ${title}</span>`);
              $(targ).find(".card-header h4 span").hide().html(`
                <a href="${loadurl}" data-toggle="parentAjax" data-target="${targ}">${$this.attr('title')}</a> - <span>${title}</span>
              `).fadeIn();
                $(`[data-toggle='parentAjax']`).on('click',function(e){
                  tabAjax($this,e);
                  return false;
                });
              $('.selectpicker').selectpicker();
              $(".select-tab").on('changed.bs.select', function () {
                var tablist = $('#tablist'),
                  dis = $(this),
                  targ = dis.val();

                  tablist.find('.tab-pane.active').removeClass("active").removeClass("show");
                  $("#"+targ).tab("show");

                  console.log(targ);
                  return false;

              });
              setTimeout(
                function () {
                  new SimpleBar($(targ).find(".content-card > .card-body")[0]);
                  $(body).fadeIn();

                }, 200);
            }
          })
        }
        return false;
      });
    }
  });

  $this.tab('show');
  return false;
}

$('[data-toggle="tabajax"]').on({
  click: function (e) {
    
      tabAjax($(this),e);
    

    
  },
  "hidden.bs.tab": function(event){
    // var btn = $(event.relatedTarget);
    // console.log(`tab ${$(this).attr("href")} is hiding`);
    // alert();
    var targ = $(this).data("target");
    $(targ).find(".content-card > .card-body .ajaxhere").fadeOut(200);
    $(targ).find(".content-card > .card-body .ajaxhere").html("");

  }
});

  
$('#main-slider .slider-container').slick({
  dots: false,
  variableWidth: false,
  prevArrow: `<button class="slick-prev"><img src="./static/images/left.svg" class="svg"></button>`,
  nextArrow: `<button class="slick-next"><img src="./static/images/right.svg" class="svg"></button>`
});

$("#main-early-content .slide-news-each").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
});
$("#main-gallery .slide-gallery-each").slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  arrows: true,
});
$("#sekilas-info .slide-info").slick({
  vertical: true
})
$(document).on('click','.btn-search',function(){
  var fs = $('.float-search');
  fs.fadeIn(300);
  // console.log('im here');
  $(document).on('mouseup', function (e) {
    var fs = $('.float-search .icon-group');
    if (!fs.is(e.target) && fs.has(e.target).length === 0) // ... nor a descendant of the container
    {
      $('.float-search').fadeOut(300);
    }

  });
});
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  var target = this.href.split('#');
  $('.nav a').filter('a[href="#' + target[1] + '"]').tab('show');
})
// });
$(".datepicker").each(function(){
  $(this).datepicker({
    uiLibrary: 'bootstrap4'
  });
});

$('.summernote').summernote({
      // placeholder: 'Hello bootstrap 4',
      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['font', ['superscript', 'subscript']]
        // ['fontsize', ['fontsize']],
        // ['color', ['color']],
        // ['height', ['height']]
      ],
      tabsize: 2,
      height: 100
});


$('.slide-login').slick({
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
});

$('.news-slide').slick({
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
});
var newsSlide = $('.slide-news-content').slick({
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  dots: false,
});

$('.leftslide1').click(function(){
  newsSlide.slick("slickPrev");
});
$('.rightslide1').click(function(){
  newsSlide.slick("slickNext");
});


$(window).resize(function(){
  var windowH = $(window).height();
  var profileH = $('.sidebar-menu > .profile').height();

  $('.navmenu').height(windowH - profileH);
});
$(document).ready(function(){

  $(window).trigger('resize');
 
	

  $('.filebrowser').on({
    'dragover': function () {
      $(this).addClass("drop_on");
      return false;
    },
    'dragleave': function () {
      $(this).removeClass("drop_on");
      return false;
    },
    'drop': function (e) {
      e.preventDefault(e);
      $(this).removeClass("drop_on");
      $("#output ul").empty();
      var formData = new FormData();

      var files_list = e.originalEvent.dataTransfer.files;

      for (var i = 0; i < files_list.length; i++) {

        // formData.append('file[]', files_list[i]);
        // $("#output ul").append("<li>" + files_list[i].name + "(TYPE: " + files_list[i].type + ", SIZE: " + files_list[i].size + ")</li>");
        // console.log(files_list[i].name);
      }  
      $(this).find("input[type='file']").prop('files',files_list).trigger("change");
    }
  });
  $(".filebrowser input").change(function () {
    var ul = $(this).parents(".filebrowser").find(".output ul");
    var ele = document.getElementById($(this).attr('id'));
    var result = ele.files;
    $(ul).empty();
    for (var x = 0; x < result.length; x++) {
      var fle = result[x];
      console.log($(this).val());
      $(ul).append("<li class='list-group-item'><i class='mdi mdi-file mr-3'></i>" + fle.name +"</li>");
    }

  });
});

function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function (e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}
