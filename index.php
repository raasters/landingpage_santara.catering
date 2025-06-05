<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANTARA KITCHEN</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>
                    <span>Welcome to</span>
                    SANTARA KITCHEN
                </h1>
                <p>Menghadirkan cita rasa autentik Nusantara dalam setiap sajian, dengan sentuhan modern untuk momen spesial Anda</p>
                <div class="hero-buttons">
                    <a href="#menu" class="btn btn-primary">Lihat Menu</a>
                    <a href="#contact" class="btn btn-secondary">Hubungi Kami</a>
                </div>
            </div>
            <a href="#menu" class="hero-scroll">
                <span>Scroll Down</span>
                <i class="fas fa-chevron-down"></i>
            </a>
        </section>

        <section class="features-section">
            <h2>Mengapa Memilih Kami</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <i class="fas fa-award"></i>
                    <h3>Kualitas Terjamin</h3>
                    <p>Bahan berkualitas dan chef berpengalaman untuk hasil terbaik</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-clock"></i>
                    <h3>Tepat Waktu</h3>
                    <p>Pengiriman selalu tepat waktu sesuai jadwal yang ditentukan</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-utensils"></i>
                    <h3>Menu Variatif</h3>
                    <p>Berbagai pilihan menu untuk setiap acara spesial Anda</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h3>Pelayanan Prima</h3>
                    <p>Layanan profesional dan ramah untuk kepuasan pelanggan</p>
                </div>
            </div>
        </section>

        <section id="menu" class="menu-section">
            <h2>Menu Favorit Kami</h2>
            <div class="menu-grid">
                <?php include 'menu.php'; ?>
            </div>
        </section>

        <section class="testimonial-section">
            <h2>Apa Kata Mereka</h2>
            <div class="testimonial-grid">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Makanan lezat, pelayanan memuaskan. Sangat direkomendasikan untuk berbagai acara!"</p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h4>Sarah Amanda</h4>
                                <span>Wedding Party</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Menu yang disajikan sangat beragam dan rasanya autentik. Semua tamu sangat puas!"</p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h4>Budi Santoso</h4>
                                <span>Corporate Event</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Presentasi makanan sangat menarik dan professional. Tim pelayanan sangat ramah dan helpful!"</p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h4>Linda Wijaya</h4>
                                <span>Birthday Celebration</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats-section">
            <div class="stats-container">
                <div class="stat-item">
                    <i class="fas fa-users"></i>
                    <h3>1000+</h3>
                    <p>Pelanggan Puas</p>
                </div>
                <div class="stat-item">
                    <i class="fas fa-calendar-check"></i>
                    <h3>500+</h3>
                    <p>Event Sukses</p>
                </div>
                <div class="stat-item">
                    <i class="fas fa-utensils"></i>
                    <h3>50+</h3>
                    <p>Menu Pilihan</p>
                </div>
                <div class="stat-item">
                    <i class="fas fa-trophy"></i>
                    <h3>5+</h3>
                    <p>Tahun Pengalaman</p>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-section">
            <h2>Hubungi Kami</h2>
            <div class="contact-form">
                <?php include 'contact.php'; ?>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script>
    document.querySelector('.mobile-menu').addEventListener('click', function() {
        document.querySelector('.nav-links').classList.toggle('active');
    });

    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    </script>
</body>
</html> 