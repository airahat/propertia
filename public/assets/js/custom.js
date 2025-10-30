
const sidebar = document.getElementById('sidebar');
const closeBtn = document.getElementById('closeSidebar');
const openBtn = document.getElementById('openSidebar');

// Close sidebar
closeBtn.addEventListener('click', function() {
    sidebar.classList.add('hidden');       // collapse sidebar
    openBtn.classList.add('show');         // animate hamburger in
});

// Open sidebar
openBtn.addEventListener('click', function() {
    sidebar.classList.remove('hidden');    // expand sidebar
    openBtn.classList.remove('show');      // animate hamburger out
});
