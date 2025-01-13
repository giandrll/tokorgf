<style>
/* Navbar Base Styling */
.navbar {
    width: 90%;
    background-color: #333;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1000;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    border-radius: 20px;
    padding: 12px 20px;
    max-width: 480px;
    transition: all 0.3s ease;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin: auto;
}

/* Navbar Center */
.navbar-center {
    display: flex;
    justify-content: space-around;
    width: 100%;
    position: relative;
}

/* Nav Item Base */
.nav-item {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    color: inherit;
    margin: 0 12px;
    padding: 8px 0;
    position: relative;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Icon Container */
.icon-container {
    position: relative;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Icon Styling */
.nav-item i {
    font-size: 22px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    z-index: 2;
}

/* Text Label */
.nav-item span {
    font-size: 12px;
    margin-top: 4px;
    transition: all 0.3s ease;
    opacity: 0.8;
}

/* Active States for Different Icons */
/* Home Icon Active */
.nav-item.active[href*="dashboardcustomer"] {
    color: #4CAF50;
}

.nav-item.active[href*="dashboardcustomer"] .icon-container::before {
    background-color: rgba(76, 175, 80, 0.2);
}

/* Product Icon Active */
.nav-item.active[href*="dashboardproduk"] {
    color: #2196F3;
}

.nav-item.active[href*="dashboardproduk"] .icon-container::before {
    background-color: rgba(33, 150, 243, 0.2);
}

/* About Icon Active */
.nav-item.active[href*="about"] {
    color: #FF5722;
}

.nav-item.active[href*="about"] .icon-container::before {
    background-color: rgba(255, 87, 34, 0.2);
}

/* Common Active State */
.nav-item.active .icon-container {
    transform: translateY(-16px);
    animation: floatIcon 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.nav-item.active i {
    transform: scale(1.2);
    animation: popIcon 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.nav-item.active span {
    opacity: 1;
    font-weight: 500;
}

/* Active Icon Background */
.nav-item.active .icon-container::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    z-index: 1;
    animation: pulseCircle 2s infinite;
}

/* Hover Effects */
.nav-item:hover:not(.active) .icon-container {
    transform: translateY(-8px);
}

.nav-item:hover:not(.active) i {
    transform: scale(1.1);
}

/* Animations */
@keyframes floatIcon {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
    100% {
        transform: translateY(-16px);
    }
}

@keyframes popIcon {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.3);
    }
    100% {
        transform: scale(1.2);
    }
}

@keyframes pulseCircle {
    0% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 0.3;
    }
    50% {
        transform: translate(-50%, -50%) scale(1.2);
        opacity: 0.2;
    }
    100% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 0.3;
    }
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .navbar {
        width: 94%;
        bottom: 15px;
        padding: 10px 15px;
    }
    
    .nav-item {
        margin: 0 8px;
    }
    
    .nav-item i {
        font-size: 20px;
    }
    
    .nav-item span {
        font-size: 11px;
    }
}

@media (min-width: 769px) {
    .navbar {
        display: none;
    }
}
</style>
<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-center">
            <a href="/dashboardcustomer" class="nav-item {{ Request::is('dashboardcustomer') ? 'active' : '' }}">
                <div class="icon-container">
                    <i class="fas fa-home"></i>
                </div>
                <span>Home</span>
            </a>
            <a href="/dashboardproduk" class="nav-item {{ Request::is('dashboardproduk') ? 'active' : '' }}">
                <div class="icon-container">
                    <i class="fas fa-cubes"></i>
                </div>
                <span>Product</span>
            </a>
            <a href="/customer/about" class="nav-item {{ Request::is('customer/about') ? 'active' : '' }}">
                <div class="icon-container">
                    <i class="fas fa-user"></i>
                </div>
                <span>About</span>
            </a>
        </div>
    </div>
</nav>