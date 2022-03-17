<script type="text/javascript">
$(function() {
$(window).scroll(function() {
if($(this).scrollTop() != 0) {
$('#toTop').fadeIn();
} else {
$('#toTop').fadeOut();
}
});
$('#toTop').click(function() {
$('body,html').animate({scrollTop:0},800);
});
});
</script>
<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
<script>
$(".vhod,.icon").fadeOut(3000).fadeIn(2000);
$(".icon").fadeOut(3000).fadeIn(2000);
</script>