<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>

{{-- script --}}
<script src="{{ asset('js/app.js') }}" defer></script>

{{-- Ajax CDN --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    jQuery(function ($) {
        var $elements = $('._content ._contentItem').hide(),
            $listItem;

        $('._filter-btn').on('click', function () {
            var $this = $(this);
            $this.addClass('active');
            $listItem = $elements.filter('.' + this.id).hide();
            $listItem.slice(0, 10).fadeIn();
            $elements.not($listItem).hide();
        }).filter('.active').click();


        $('#loadMore').on('click', function (e) {
            e.preventDefault();
            $listItem.filter(':hidden').slice(0, 10).slideDown();
        });
    });

    var btnContainer = document.getElementById("filterBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {

        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

</script>
