<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMAK - EPP</title>
    <link rel="shortcut icon" href="../assets/umak-logo.png" type="image/png">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/umak-epp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="bg-[#111C4E] text-[#f5f5f5]">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <img src="../assets/umak-logo.png" alt="UMAK Logo" class="h-10">
                </div>

                <div class="hidden md:flex space-x-16 items-center justify-center">
                    <a href="" class="text-[#f5f5f5] font-semibold text-sm hover:opacity-75">HOME</a>
                    <a href="" class="text-[#f5f5f5] font-semibold text-sm hover:opacity-75">STATUS</a>
                    <a href="" class="text-[#f5f5f5] font-semibold text-sm hover:opacity-75">CALENDAR</a>
                    <button type="button" class="flex items-center justify-center uppercase gap-2 px-3 py-1 border border-[#FFC700] rounded-full">
                      <span class="text-sm font-bold text-[#FFC700]">GET STARTED</span>
                      <ion-icon name="enter-outline" class="text-[#FFC700] text-lg"></ion-icon>
                    </button>
                </div>
                <div class="md:hidden">
                    <button id="hamburgerMenu" class="text-2xl focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div id="mobileMenu" class="fixed inset-y-0 right-0 w-1/2 bg-[#111C4E] text-[#f5f5f5] transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
        <div class="flex flex-col h-full">
            <div class="flex justify-end p-4">
                <button id="closeMenu" class="text-2xl focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="flex-grow flex flex-col justify-center items-center space-y-16 text-lg">
              <a href="" class="text-[#f5f5f5] font-semibold text-sm hover:opacity-75">HOME</a>
              <a href="" class="text-[#f5f5f5] font-semibold text-sm hover:opacity-75">STATUS</a>
              <a href="" class="text-[#f5f5f5] font-semibold text-sm hover:opacity-75">CALENDAR</a>
                <button type="button" class="flex items-center justify-center uppercase gap-2 px-3 py-1 border border-[#FFC700] rounded-full">
                  <span class="text-sm font-bold text-[#FFC700]">GET STARTED</span>
                  <ion-icon name="enter-outline" class="text-[#FFC700] text-lg"></ion-icon>
                </button>
            </div>
        </div>
    </div>

    <script>
        const hamburgerMenu = document.getElementById('hamburgerMenu');
        const closeMenu = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');

        hamburgerMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>