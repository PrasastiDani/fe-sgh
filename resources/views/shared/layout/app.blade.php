<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Satya Graha Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

    </style>
</head>

<body style="background-color: #F3F4F6">

    {{-- navbar start --}}
    @include('shared.component.nav')
    {{-- navbar end --}}

    {{-- content start --}}
    @yield('content')
    {{-- content end --}}

    {{-- footer start --}}
    @include('shared.component.footer')
    {{-- footer end --}}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script>

    {{-- script dropdown menu start --}}
    <script>
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
    {{-- script dropdown menu end --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to setup number input controls
            function setupNumberInput(inputId) {
                const input = document.getElementById(inputId);
                const minusButton = input.previousElementSibling;
                const plusButton = input.nextElementSibling;

                minusButton.addEventListener('click', () => {
                    const currentValue = parseInt(input.value) || 0;
                    if (currentValue > 0) {
                        input.value = currentValue - 1;
                    }
                });

                plusButton.addEventListener('click', () => {
                    const currentValue = parseInt(input.value) || 0;
                    input.value = currentValue + 1;
                });
            }

            // Setup controls for each input
            setupNumberInput('night');
            setupNumberInput('person');
            setupNumberInput('room_quantity');
        });
    </script>

    {{-- script arrival, night, departure start --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const arrivalDateInput = document.getElementById('arrival_date');
            const nightInput = document.getElementById('night');
            const departureDateInput = document.getElementById('departure_date');

            // Allowed night values
            const allowedNights = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
            let currentNightIndex = -1;

            function calculateDepartureDate() {
                if (arrivalDateInput.value && nightInput.value) {
                    const arrivalDate = new Date(arrivalDateInput.value);
                    const nights = parseInt(nightInput.value, 10);

                    const departureDate = new Date(arrivalDate);
                    departureDate.setDate(arrivalDate.getDate() + nights);

                    const year = departureDate.getFullYear();
                    const month = String(departureDate.getMonth() + 1).padStart(2, '0');
                    const day = String(departureDate.getDate()).padStart(2, '0');

                    departureDateInput.value = `${year}-${month}-${day}`;
                }
            }

            const decrementButton = nightInput.previousElementSibling;
            const incrementButton = nightInput.nextElementSibling;

            decrementButton.addEventListener('click', () => {
                if (currentNightIndex > 0) {
                    currentNightIndex--;
                    nightInput.value = allowedNights[currentNightIndex];
                    calculateDepartureDate();
                }
            });

            incrementButton.addEventListener('click', () => {
                if (currentNightIndex < allowedNights.length - 1) {
                    currentNightIndex++;
                    nightInput.value = allowedNights[currentNightIndex];
                    calculateDepartureDate();
                }
            });

            // Initialize
            arrivalDateInput.addEventListener('change', calculateDepartureDate);
            nightInput.addEventListener('input', (e) => {
                const inputValue = parseInt(e.target.value, 10);
                const index = allowedNights.indexOf(inputValue);
                if (index !== -1) {
                    currentNightIndex = index;
                }
            });
        });
    </script>
    {{-- script arival, night, departure end --}}

    {{-- script toggle and group name start --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const groupToggle = document.querySelector('input[type="checkbox"]');
            const groupNameInput = document.querySelector('input[placeholder="Group Name"]');

            // Initial state
            groupNameInput.disabled = true;

            // Toggle event listener
            groupToggle.addEventListener('change', () => {
                groupNameInput.disabled = !groupToggle.checked;

                // Optional: Add visual feedback
                if (groupToggle.checked) {
                    groupNameInput.classList.remove('bg-gray-300', 'cursor-not-allowed');
                    groupNameInput.classList.add('bg-gray-50');
                } else {
                    groupNameInput.classList.add('bg-gray-300', 'cursor-not-allowed');
                    groupNameInput.classList.remove('bg-gray-50');
                }
            });
        });
    </script>
    {{-- script toggle and group name end --}}
</body>

</html>
