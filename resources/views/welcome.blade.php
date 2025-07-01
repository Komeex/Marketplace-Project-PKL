<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                @vite('resources/css/app.css')

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-blue-800"> 
    <h1 class="">hahaha</h1>





    <div class="flex flex-col">
        <div class="flex flex-col" id="expertise">
            <div>
                text expertise
            </div>
            <div class="flex">
                card section
            </div>
        </div>

        <div class="flex-col">
            <div>
                judul
            </div>
            <div class="col">
                div card
            </div>
        </div>
    </div>





     <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #fafafa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }

        .main-container {
            display: flex;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            width: 100%;
            max-width: 900px;
            min-height: 500px;
        }

        .info-section {
            flex: 1;
            background: #1a1a1a;
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .brand-logo {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #fff;
        }

        .brand-tagline {
            font-size: 16px;
            margin-bottom: 30px;
            color: #ccc;
            line-height: 1.5;
        }

        .features-list {
            list-style: none;
        }

        .features-list li {
            margin-bottom: 15px;
            padding-left: 25px;
            position: relative;
            color: #ddd;
            font-size: 14px;
        }

        .features-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #4CAF50;
            font-weight: bold;
        }

        .products-showcase {
            display: flex;
            gap: 10px;
            margin-top: 30px;
            opacity: 0.7;
        }

        .product-icon {
            width: 40px;
            height: 40px;
            background: #333;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .form-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-subtitle {
            color: #666;
            font-size: 14px;
        }

        .form-tabs {
            display: flex;
            border-bottom: 1px solid #eee;
            margin-bottom: 25px;
        }

        .tab-button {
            flex: 1;
            padding: 15px;
            border: none;
            background: none;
            cursor: pointer;
            font-size: 15px;
            color: #999;
            border-bottom: 2px solid transparent;
            transition: all 0.2s;
        }

        .tab-button.active {
            color: #333;
            border-bottom-color: #333;
            font-weight: 600;
        }

        .form-content {
            display: none;
        }

        .form-content.active {
            display: block;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 14px;
            font-weight: 500;
        }

        .input-group input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            background: #fafafa;
            transition: all 0.2s;
        }

        .input-group input:focus {
            outline: none;
            border-color: #333;
            background: white;
        }

        .input-group input::placeholder {
            color: #aaa;
        }

        .submit-btn {
            width: 100%;
            padding: 16px;
            background: #333;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background: #444;
        }

        .submit-btn:active {
            background: #222;
        }

        .or-divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
            color: #999;
            font-size: 13px;
        }

        .or-divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #eee;
        }

        .or-divider span {
            background: white;
            padding: 0 15px;
        }

        .social-buttons {
            display: flex;
            gap: 12px;
        }

        .social-btn {
            flex: 1;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background: white;
            cursor: pointer;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .social-btn:hover {
            background: #f5f5f5;
        }

        .forgot-link {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-link a {
            color: #666;
            text-decoration: none;
            font-size: 13px;
        }

        .forgot-link a:hover {
            color: #333;
        }

        .terms-check {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 20px;
            font-size: 13px;
            color: #666;
        }

        .terms-check input[type="checkbox"] {
            margin-top: 2px;
        }

        .terms-check a {
            color: #333;
            text-decoration: none;
        }

        .terms-check a:hover {
            text-decoration: underline;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
                max-width: 400px;
            }

            .info-section {
                padding: 30px 20px;
                text-align: center;
            }

            .form-section {
                padding: 30px 20px;
            }

            .products-showcase {
                justify-content: center;
            }

            .social-buttons {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .info-section,
            .form-section {
                padding: 25px 15px;
            }

            .brand-logo {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Info Section -->
        <div class="info-section">
            <div class="brand-logo">TRENDY FASHION</div>
            <div class="brand-tagline">
                Marketplace fashion terpercaya dengan koleksi terlengkap untuk gaya hidup modern Anda
            </div>
            
            <ul class="features-list">
                <li>Koleksi terbaru dari brand ternama</li>
                <li>Kualitas premium dengan harga terjangkau</li>
                <li>Gratis ongkir ke seluruh Indonesia</li>
                <li>Garansi 100% uang kembali</li>
                <li>Customer service 24/7</li>
            </ul>

            <div class="products-showcase">
                <div class="product-icon">👕</div>
                <div class="product-icon">👖</div>
                <div class="product-icon">👟</div>
                <div class="product-icon">👗</div>
                <div class="product-icon">🧥</div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="form-section">
            <div class="form-header">
                <h2 class="form-title">Selamat Datang</h2>
                <p class="form-subtitle">Mulai belanja fashion favoritmu sekarang</p>
            </div>

            <div class="form-tabs">
                <button class="tab-button active" onclick="showTab('login')">Masuk</button>
                <button class="tab-button" onclick="showTab('register')">Daftar</button>
            </div>

            <!-- Login Form -->
            <div id="loginTab" class="form-content active">
                <form>
                    <div class="input-group">
                        <label for="loginEmail">Email atau Username</label>
                        <input type="text" id="loginEmail" placeholder="Masukkan email atau username" required>
                    </div>
                    <div class="input-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" id="loginPassword" placeholder="Masukkan password" required>
                    </div>
                    <button type="submit" class="submit-btn">Masuk</button>
                    <div class="forgot-link">
                        <a href="#">Lupa password?</a>
                    </div>
                </form>

                <div class="or-divider">
                    <span>atau</span>
                </div>

                <div class="social-buttons">
                    <button class="social-btn">
                        <span>🔗</span> Google
                    </button>
                    <button class="social-btn">
                        <span>📘</span> Facebook
                    </button>
                </div>
            </div>

            <!-- Register Form -->
            <div id="registerTab" class="form-content">
                <form>
                    <div class="input-group">
                        <label for="regName">Nama Lengkap</label>
                        <input type="text" id="regName" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="input-group">
                        <label for="regEmail">Email</label>
                        <input type="email" id="regEmail" placeholder="nama@email.com" required>
                    </div>
                    <div class="input-group">
                        <label for="regPhone">Nomor HP</label>
                        <input type="tel" id="regPhone" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="input-group">
                        <label for="regPassword">Password</label>
                        <input type="password" id="regPassword" placeholder="Minimal 8 karakter" required>
                    </div>
                    <div class="input-group">
                        <label for="regConfirmPassword">Konfirmasi Password</label>
                        <input type="password" id="regConfirmPassword" placeholder="Ulangi password" required>
                    </div>
                    
                    <div class="terms-check">
                        <input type="checkbox" id="agreeTerms" required>
                        <label for="agreeTerms">
                            Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a>
                        </label>
                    </div>

                    <button type="submit" class="submit-btn">Daftar Sekarang</button>
                </form>

                <div class="or-divider">
                    <span>atau</span>
                </div>

                <div class="social-buttons">
                    <button class="social-btn">
                        <span>🔗</span> Google
                    </button>
                    <button class="social-btn">
                        <span>📘</span> Facebook
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showTab(tabName) {
            // Hide all tabs
            document.querySelectorAll('.form-content').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Remove active class from all buttons
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('active');
            });
            
            // Show selected tab
            document.getElementById(tabName + 'Tab').classList.add('active');
            
            // Add active class to clicked button
            event.target.classList.add('active');
        }

        // Form submission handling
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const inputs = this.querySelectorAll('input[required]');
                let isValid = true;
                
                // Basic validation
                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        input.style.borderColor = '#ff4444';
                        isValid = false;
                    } else {
                        input.style.borderColor = '#ddd';
                    }
                });

                // Password match validation for register
                const confirmPassword = this.querySelector('#regConfirmPassword');
                if (confirmPassword) {
                    const password = this.querySelector('#regPassword').value;
                    if (password !== confirmPassword.value) {
                        confirmPassword.style.borderColor = '#ff4444';
                        isValid = false;
                        alert('Password tidak cocok!');
                        return;
                    }
                }
                
                if (isValid) {
                    alert('Berhasil! Redirecting...');
                    // Di sini Anda bisa redirect ke halaman utama
                    // window.location.href = '/dashboard';
                }
            });
        });

        // Reset input border on focus
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = '#333';
            });
            
            input.addEventListener('blur', function() {
                if (this.value.trim()) {
                    this.style.borderColor = '#ddd';
                }
            });
        });
    </script>
</body>
</html>