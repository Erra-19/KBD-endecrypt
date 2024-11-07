const openButtons = document.querySelectorAll('.menu-item button');
const overlay = document.querySelector('.overlay');
const closeButton = document.querySelector('.close-button');

// Placeholders in the overlay for the selected item details
const overlayImage = document.getElementById('overlay-image');
const overlayName = document.getElementById('overlay-name');
const overlayPrice = document.getElementById('overlay-price');
const addOnsList = document.getElementById('add-ons-list');

let count = 1;
// Get the base price as a number from the data attribute
let basePrice = parseFloat(document.querySelector(".selected-item").dataset.basePrice);

openButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        const menuItem = event.target.closest('.menu-item');
        
        // Get item details from data attributes or directly from HTML elements
        const itemName = menuItem.querySelector('.name').textContent;
        const itemPrice = menuItem.querySelector('.price').textContent;
        const itemImage = menuItem.querySelector('img').src;
        const menuId = menuItem.querySelector('button').dataset.id;
 // Assuming you have menu_id as a data attribute

        // Set item details in the overlay
        overlayImage.src = itemImage;
        overlayName.textContent = itemName;
        overlayPrice.textContent = itemPrice;
        count = 1; // Reset counter when a new item is selected
        updateDisplay(); // Initialize overlay price based on the base price

        // Display the overlay
        overlay.style.display = 'block';

        // Fetch add-ons via AJAX
        fetchAddOns(menuId);
    });
});

closeButton.addEventListener('click', () => {
    overlay.style.display = 'none';
});

function fetchAddOns(menuId) {
    // Fetch add-ons for the selected menu item using a POST request
    fetch('/peskop/addons', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ menu_id: menuId })
    })
    .then(response => response.json())
    .then(data => {
        // Clear previous add-ons
        addOnsList.innerHTML = '';

        // Populate the add-ons list
        if (data.length === 0) {
            addOnsList.innerHTML = '<p>No add-ons available for this item.</p>';
        } else {
            data.forEach(addOn => {
                const addOnItem = document.createElement('div');
                addOnItem.classList.add('add-on-item');
                addOnItem.innerHTML = `
                    <div class="name">${addOn.name}</div>
                    <div class="price">+ Rp. ${new Intl.NumberFormat('id-ID').format(addOn.price)}</div>
                    <input type="checkbox" class="add-on-checkbox" id="addon-${addOn.id}">
                `;
                addOnsList.appendChild(addOnItem);
            });
        }
    })
    .catch(error => {
        console.error("Failed to fetch add-ons:", error);
    });
}

function updateDisplay() {
    document.getElementById("counter").innerText = count;
    // Format the calculated total and update the overlay price display
    document.getElementById("overlay-price").innerText = `Rp. ${new Intl.NumberFormat('id-ID').format(basePrice * count)}`;
}

function increment() {
    count++;
    updateDisplay();
}

function decrement() {
    if (count > 1) {
        count--;
        updateDisplay();
    }
}
