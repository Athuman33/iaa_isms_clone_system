</div>
    <script>
        // Sidebar collapse functionality
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const collapseBtn = document.getElementById('collapseBtn');
            const icon = collapseBtn.querySelector('.icon');
            
            collapseBtn.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
                
                // Change arrow direction
                if (sidebar.classList.contains('collapsed')) {
                    icon.className = 'icon icon-arrow-right';
                    collapseBtn.setAttribute('aria-label', 'Expand sidebar');
                } else {
                    icon.className = 'icon icon-arrow-left';
                    collapseBtn.setAttribute('aria-label', 'Collapse sidebar');
                }
            });
        });
    </script>
</body>
</html>