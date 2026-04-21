<?php 

//require_once __DIR__ . '/libs/PhpSpreadsheet/autoload.php';
//require_once __DIR__ . '/app/init.php';



$page_id = null;
$comp_model = new SharedController;



?>

<style>
/* ===== MODERN LOGIN STYLE ===== */
body {
    background: linear-gradient(135deg, #0f172a, #1e293b);
    font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont;
}

.login-page-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.login-card {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);
    border-radius: 18px;
    padding: 2.5rem;
    width: 100%;
    max-width: 420px;
    color: #fff;
    animation: fadeUp 0.6s ease;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.login-icon {
    width: 80px;
    margin-bottom: 1rem;
}

.login-card h2 {
    font-weight: 700;
    color: #cbd5f5;
    margin-bottom: 0.25rem;
}

.login-card p {
    color: #cbd5f5;
    font-size: 0.9rem;
}

.form-control {
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.25);
    color: #fff;
}

.form-control::placeholder {
    color: #cbd5f5;
}

.form-control:focus {
    background: rgba(255,255,255,0.18);
    border-color: #60a5fa;
    box-shadow: 0 0 0 0.2rem rgba(96,165,250,.25);
    color: #fff;
}

.input-group-text {
    background: rgba(255,255,255,0.15);
    border: none;
    color: #fff;
}

.btn-primary {
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    border: none;
    border-radius: 12px;
    padding: 0.75rem;
    font-weight: 600;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
}

.login-options {
    font-size: 0.85rem;
    color: #e5e7eb;
}

.login-options a {
    color: #f87171;
    text-decoration: none;
}

.login-options a:hover {
    text-decoration: underline;
}

.toggle-password {
    cursor: pointer;
}
/* ===== FOOTER PUTIH KHUSUS LOGIN ===== */
.main-footer,
footer,
.footer {
    background: #ffffff !important;
    color: #334155 !important;
    border-top: 1px solid #e5e7eb;
}

/* Link footer */
.main-footer a,
footer a {
    color: #2563eb !important;
    font-weight: 500;
}

.main-footer a:hover,
footer a:hover {
    text-decoration: underline;
}

/* Agar footer tidak transparan */
.main-footer * {
    color: #334155 !important;
}

</style>

<div class="login-page-wrapper">
    <div class="login-card shadow-lg">

        <div class="text-center mb-4">
            <img src="assets/images/logo.png" alt="Login Icon" class="login-icon">
            <h2>SIMASNOR</h2>
            <p><strong>Sistem Informasi Manajemen Honor <br>BPS Kabupaten Gresik</strong></p>
        </div>

        <?php $this::display_page_errors(); ?>

        <form name="loginForm"
              action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>"
              method="post">

            <!-- USERNAME -->
            <div class="form-group mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input name="username" required
                           class="form-control form-control-lg"
                           placeholder="Username atau Email" />
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="form-group mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="password"
                           name="password"
                           required
                           class="form-control form-control-lg"
                           placeholder="Password"
                           id="passwordInput" />
                    <span class="input-group-text toggle-password" onclick="togglePassword()">
                        <i class="fa fa-eye"></i>
                    </span>
                </div>
            </div>

            <!-- OPTIONS -->
            <div class="d-flex justify-content-between align-items-center mb-4 login-options">
                <label>
                    <input type="checkbox" name="rememberme"> Remember Me
                </label>
                <a href="<?php print_link('passwordmanager') ?>">Reset Password?</a>
            </div>

            <!-- BUTTON -->
            <button class="btn btn-primary w-100 btn-lg" type="submit">
                <i class="fa fa-sign-in-alt me-2"></i> Login
            </button>
        </form>

    </div>
</div>

<script>
function togglePassword() {
    const input = document.getElementById("passwordInput");
    input.type = input.type === "password" ? "text" : "password";
}
</script>
