<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="assets/js/bootstrap.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script> -->

<script src="assets/js/swiper.min.js"></script>

<!-- typewriter -->
<script>
  var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>

<script>
  //Map the sections:
  $scrollItems.each(function(index,ele) { $(ele).attr("debog",index).data("pos",index); });

// Bind to scroll
$(window).bind('scroll',upPos);

//Move on click:
$('#arrow a').click(function(e){
    if ($(this).hasClass('next') && pagePositon+1 <= pageMaxPosition) {
        pagePositon++;
        $('html, body').stop().animate({ 
              scrollTop: $scrollItems.eq(pagePositon).offset().top
        }, 300);
    }
    if ($(this).hasClass('previous') && pagePositon-1 >= 0) {
        pagePositon--;
        $('html, body').stop().animate({ 
              scrollTop: $scrollItems.eq(pagePositon).offset().top
          }, 300);
        return false;
    }
});

//Update position func:
function upPos(){
   var fromTop = $(this).scrollTop();
   var $cur = null;
    $scrollItems.each(function(index,ele){
        if ($(ele).offset().top < fromTop + offsetTolorence) $cur = $(ele);
    });
   if ($cur != null && pagePositon != $cur.data('pos')) {
       pagePositon = $cur.data('pos');
   }                   
}

});
</script>