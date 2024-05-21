<script>
document.addEventListener('DOMContentLoaded', function() {
    var menuLinks = document.querySelectorAll('.menu a');
    
    menuLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            var targetSection = document.querySelector(link.getAttribute('href'));
            
            console.log('Target Section:', targetSection); // Periksa target section
            
            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop,
                    behavior: 'smooth'
                });
            }
        })
    });
    
</script>