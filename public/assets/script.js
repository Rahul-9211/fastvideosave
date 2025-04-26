(function ($) {
    "use strict";

    // data background
    $("[data-background]").each(function () {
        $(this).css({
            "background-image": "url(" + $(this).data("background") + ")",
        });
    });

    // collapse
    $(".collapse")
        .on("shown.bs.collapse", function () {
            $(this)
                .parent()
                .find(".ti-plus")
                .removeClass("ti-plus")
                .addClass("ti-minus");
        })
        .on("hidden.bs.collapse", function () {
            $(this)
                .parent()
                .find(".ti-minus")
                .removeClass("ti-minus")
                .addClass("ti-plus");
        });

    // match height
    $(".match-height").matchHeight({
        byRow: true,
        property: "height",
        target: null,
        remove: false,
    });
})(jQuery);

$('#paste').click(function(){
  // Get the clipboard content
  navigator.clipboard.readText().then(clipText => {
      // Paste the clipboard content into the input field
      $('#search').val(clipText);
  }).catch(err => {
      console.error('Failed to read clipboard contents: ', err);
  });
});

function getRandomBigInt(min, max) {
  min = BigInt(min);
  max = BigInt(max);
  const range = max - min + 1n;
  const randomBigInt = min + (BigInt(Math.floor(Math.random() * Number(range))));
  return randomBigInt;
}

$(document).ready(function () {
    $(".header-form-main").on("submit", function (event) {
        event.preventDefault(); // Prevent the form from submitting the traditional way

        $.ajax({
            url: "/search", // Route to submit the form
            method: "POST",
            data: $(this).serialize(), // Serialize the form data
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token
            },
            beforeSend: function (event) {
                $(".video-loader").show();
            },
            success: function (response) {
                $(".video-loader").hide();
                if(response.error)
                {
                    $('.show-errors').html(response.error);
                    $('.show-errors').show();
                } else {
                    $(".form-section").remove();
                    $(".result-data").html(response);
                    $("html, body").animate(
                        {
                            scrollTop: $(".result-data").offset().top,
                        },
                        1000
                    );
                }
            },
            error: function (xhr) {
                console.log(xhr.responseText); // Handle error
            },
        });
    });
});


$(document).on('click', '.download-btns', function () {
  $(this).text('Downloading...').attr('disabled', 'disabled');
  let btn = $(this);
  let url = btn.data('url');
  let textvar = btn.data('text');
  let vidname = btn.data('name');
  let ext = btn.data('ext');
  let randomInt = getRandomBigInt(111111111111111111111111111111, 999999999999999999999999999999);
  downVideo(url, vidname+'_'+randomInt+'.'+ext,  btn, textvar);
});

function downVideo (url, name,  btn, textvar){
  var xhr = new XMLHttpRequest();
  xhr.open('GET', url, true);
  xhr.responseType = 'blob';
  xhr.onprogress = function(e) {
      if (e.lengthComputable) {
        $('.progress-bar-bottom').show();
          const percentage = (e.loaded / e.total) * 100;
          const progressBar = document.getElementById('progressBar');
          const progressLabel = document.getElementById('progressLabel');
          progressBar.value = percentage;
          progressLabel.textContent = percentage.toFixed(2) + '%';
      }
  };
  xhr.onload = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          let blob = this.response;
          let u = window.URL.createObjectURL(new Blob([blob]));
          let a = document.createElement('a');
          a.download = name;
          a.href = u;
          a.style.display = 'none';
          document.body.appendChild(a);
          a.click();
          a.remove();
          $('.progress-bar-bottom').hide();
          btn.text(textvar).removeAttr('disabled');
      }
  };
  xhr.send();
  
}

$(document).on('click', '.reload-more', function (e) {
    window.scrollTo(0, 0);
    // Reload the current page
    setTimeout(function() {
        location.reload();
    }, 0);
})

$(function(){
    var hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');
  
    $('.nav-tabs a').click(function (e) {
      $(this).tab('show');
      var scrollmem = $('body').scrollTop();
      window.location.hash = this.hash;
      $('html,body').scrollTop(scrollmem);
    });
  });