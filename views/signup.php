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
<body class="bg-[#F5F5F5] min-h-screen">
    <div class="flex h-screen">
        <div class="hidden md:block md:w-1/2 bg-cover bg-center relative overflow-hidden custom-background-signup"></div>
        
        <div class="w-full md:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="flex justify-center mb-6">
                    <img src="../assets/umak-logo.png" alt="UMAK Logo" class="w-24 h-24">
                </div>
                <h1 class="text-2xl font-bold text-center mb-6 font-marcellus">UMAK - EPP</h1>
                
                <form class="space-y-4 p-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="firstName" class="block font-medium text-[#1e1e1e]">First Name</label>
                            <div class="mt-1 relative">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2">
                                    <i class="fa-solid fa-user text-[#EDE324]"></i>
                                </span>
                                <input type="text" id="firstName" name="firstName" placeholder="Enter First Name" class="text-[#f5f5f5] block w-full pl-10 pr-3 py-2 rounded-md bg-[#1e1e1e]">
                            </div>
                        </div>
                        
                        <div>
                            <label for="lastName" class="block font-medium text-[#1e1e1e]">Last Name</label>
                            <div class="mt-1 relative">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2">
                                    <i class="fa-solid fa-user text-[#EDE324]"></i>
                                </span>
                                <input type="text" id="lastName" name="lastName" placeholder="Enter Last Name" class="block w-full text-[#f5f5f5] pl-10 pr-3 py-2 rounded-md bg-[#1e1e1e]">
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-[#1e1e1e] font-medium">Email</label>
                        <div class="mt-1 relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2">
                                <i class="fa-solid fa-envelope text-[#EDE324]"></i>
                            </span>
                            <input type="email" id="email" name="email" placeholder="Enter UMAK Email" class="mt-1 block w-full pl-10 pr-3 py-2 text-[#f5f5f5] rounded-md bg-[#1e1e1e] shadow-sm">
                        </div>
                    </div>
                    
                    <div>
                        <label for="password" class="block text-[#1e1e1e] font-medium">Password</label>
                        <div class="mt-1 relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2">
                                <i class="fa-solid fa-lock text-[#EDE324]"></i>
                            </span>
                            <input type="password" id="password" name="password" placeholder="Enter Password" class="mt-1 block w-full pl-10 pr-10 text-[#f5f5f5] py-2 rounded-md bg-[#1e1e1e] shadow-sm">
                            <span class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer">
                                <i class="fa-solid fa-eye text-[#f5f5f5] opacity-50"></i>
                            </span>
                        </div>
                    </div>
                    
                    <div>
                        <label for="confirmPassword" class="block text-[#1e1e1e] font-medium">Confirm Password</label>
                        <div class="mt-1 relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2">
                                <i class="fa-solid fa-lock text-[#EDE324]"></i>
                            </span>
                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Enter Password" class="mt-1 mb-4 pl-10 pr-10 text-[#f5f5f5] py-2 block w-full rounded-md bg-[#1e1e1e] shadow-sm">
                            <span class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer">
                                <i class="fa-solid fa-eye text-[#f5f5f5] opacity-50"></i>
                            </span>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full bg-[#111C4E] text-[#EDE324] rounded-md font-semibold text-lg py-3 px-4">SIGN UP</button>
                </form>
                
                <div class="mt-4 flex justify-end items-end px-4">
                    <a href="#" class="font-medium text-sm text-[#1e1e1e] hover:text-[#111C4E]">Sign in instead</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
