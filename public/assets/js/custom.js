
const sidebar = document.getElementById('sidebar');
const closeBtn = document.getElementById('closeSidebar');
const openBtn = document.getElementById('openSidebar');

// Close sidebar
closeBtn.addEventListener('click', function () {
    sidebar.classList.add('hidden');       // collapse sidebar
    openBtn.classList.add('show');         // animate hamburger in
});

// Open sidebar
openBtn.addEventListener('click', function () {
    sidebar.classList.remove('hidden');    // expand sidebar
    openBtn.classList.remove('show');      // animate hamburger out
});

// property dynamic details 

document.getElementById('propertySelect').addEventListener('change', function () {
    const id = this.value;
    fetch(`/property/${id}/details`)
        .then(response => response.json())
        // .then(data => {
        //     console.log(data)
        // })
        .then(data => {
            document.getElementById('address').value = data.address;
            document.getElementById('city').value = data.city;
            document.getElementById('area').value = data.area;
            document.getElementById('size').value = data.size;
            document.getElementById('price').value = data.price;
            document.getElementById('measurement').value = data.measurement_id ;
        })
        .catch(error => console.log(error));
});