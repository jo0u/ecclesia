<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecclesia - Gestão de Igreja</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #FFFFFF;
            color: #424242;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Cores da paleta */
        :root {
            --azul-serenity: #4A90E2;
            --branco-neve: #FFFFFF;
            --verde-esperanca: #66BB6A;
            --dourado-claro: #FBC02D;
            --cinza-neutro: #ECECEC;
            --cinza-escuro: #757575;
            --cinza-darkest: #424242;
        }
        
        /* Navbar */
        nav {
            position: sticky;
            top: 0;
            z-index: 50;
            background: var(--azul-serenity);
            box-shadow: 0 4px 12px rgba(74, 144, 226, 0.15);
        }
        
        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 24px;
            font-weight: 700;
            color: var(--branco-neve);
        }
        
        .logo-icon {
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 20px;
        }
        
        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }
        
        .nav-link {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.85);
            font-weight: 500;
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -8px;
            left: 0;
            background: var(--dourado-claro);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--dourado-claro);
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .btn-primary {
            background: var(--verde-esperanca);
            color: var(--branco-neve);
            border: none;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 187, 106, 0.3);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #f5f9ff 0%, #fafbf7 100%);
            padding: 80px 0;
            display: flex;
            align-items: center;
            min-height: 90vh;
        }
        
        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .hero-content h1 {
            font-size: 56px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 24px;
            color: var(--cinza-darkest);
        }
        
        .gradient-text {
            color: var(--azul-serenity);
        }
        
        .hero-content p {
            font-size: 18px;
            color: var(--cinza-escuro);
            margin-bottom: 32px;
            line-height: 1.8;
        }
        
        .hero-buttons {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }
        
        .btn-secondary {
            border: 2px solid var(--azul-serenity);
            color: var(--azul-serenity);
            background: transparent;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 14px;
        }
        
        .btn-secondary:hover {
            background: rgba(74, 144, 226, 0.08);
        }
        
        .hero-visual {
            position: relative;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        
        .hero-card {
            background: var(--branco-neve);
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 20px 50px rgba(74, 144, 226, 0.1);
            position: relative;
            z-index: 2;
            border: 1px solid var(--cinza-neutro);
        }
        
        .hero-card-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, var(--azul-serenity) 0%, #6BA4D9 100%);
            border-radius: 16px;
            transform: rotate(4deg);
            z-index: 1;
        }
        
        .stat-item {
            display: flex;
            gap: 16px;
            padding: 16px;
            border-radius: 12px;
            margin-bottom: 16px;
            border-left: 4px solid var(--verde-esperanca);
            background: #f9fafb;
        }
        
        .stat-item:nth-child(2) {
            border-left-color: var(--azul-serenity);
        }
        
        .stat-item:nth-child(3) {
            border-left-color: var(--dourado-claro);
        }
        
        .stat-item:nth-child(4) {
            border-left-color: var(--verde-esperanca);
        }
        
        .stat-icon {
            font-size: 28px;
            min-width: 40px;
        }
        
        .stat-content p:first-child {
            font-size: 12px;
            color: var(--cinza-escuro);
            margin-bottom: 4px;
        }
        
        .stat-content p:last-child {
            font-size: 20px;
            font-weight: 700;
            color: var(--cinza-darkest);
        }
        
        @media (max-width: 768px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .nav-links {
                gap: 20px;
            }
            
            .nav-link {
                display: none;
            }
            
            .hero-content h1 {
                font-size: 36px;
            }
        }
        
        /* Stats Bar */
        .stats-bar {
            background: linear-gradient(135deg, var(--azul-serenity) 0%, #6BA4D9 100%);
            padding: 60px 0;
            color: white;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            text-align: center;
        }
        
        .stat-box h3 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 8px;
        }
        
        .stat-box p {
            font-size: 14px;
            opacity: 0.9;
        }
        
        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            
            .stat-box h3 {
                font-size: 32px;
            }
        }
        
        /* Features Section */
        .features {
            padding: 80px 0;
            background: #f9fafb;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 16px;
            color: var(--cinza-darkest);
        }
        
        .section-title p {
            font-size: 18px;
            color: var(--cinza-escuro);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 32px;
        }
        
        .feature-card {
            background: var(--branco-neve);
            border: 1px solid var(--cinza-neutro);
            border-radius: 16px;
            padding: 32px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--verde-esperanca) 0%, var(--azul-serenity) 100%);
            transform: scaleX(0);
            transition: transform 0.4s ease;
            transform-origin: left;
        }
        
        .feature-card:hover::before {
            transform: scaleX(1);
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(74, 144, 226, 0.12);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--azul-serenity) 0%, #6BA4D9 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            margin: 0 auto 16px;
        }
        
        .feature-card h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--cinza-darkest);
        }
        
        .feature-card p {
            font-size: 14px;
            color: var(--cinza-escuro);
            line-height: 1.6;
        }
        
        @media (max-width: 768px) {
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            
            .section-title h2 {
                font-size: 28px;
            }
        }
        
        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, var(--azul-serenity) 0%, #6BA4D9 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 16px;
        }
        
        .cta p {
            font-size: 18px;
            margin-bottom: 32px;
            opacity: 0.95;
        }
        
        .btn-light {
            background: var(--dourado-claro);
            color: var(--cinza-darkest);
            border: none;
            padding: 16px 40px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-light:hover {
            background: #FDD835;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(251, 192, 45, 0.3);
        }
        
        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            padding: 48px 0;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-col h4 {
            font-weight: 600;
            margin-bottom: 16px;
            color: var(--dourado-claro);
        }
        
        .footer-col p {
            color: #b0bec5;
            font-size: 14px;
            line-height: 1.8;
        }
        
        .footer-col a {
            color: #b0bec5;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
            transition: color 0.3s ease;
        }
        
        .footer-col a:hover {
            color: var(--dourado-claro);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 32px;
            text-align: center;
            color: #b0bec5;
            font-size: 14px;
        }
        
        @media (max-width: 768px) {
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <div class="logo-icon">✝️</div>
                    <span>Ecclesia</span>
                </div>
                <div class="nav-links">
                    <a href="#features" class="nav-link">Funcionalidades</a>
                    <a href="#stats" class="nav-link">Estatísticas</a>
                    <a href="#contact" class="nav-link">Contato</a>
                    <a href="/admin" class="btn-primary">Acessar Sistema</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <h1>Gestão Inteligente para sua <span class="gradient-text">Igreja</span></h1>
                    <p>Ecclesia é a solução completa para gerenciar pessoas, professores, aulas e salas da sua comunidade religiosa com eficiência, paz e esperança.</p>
                    <div class="hero-buttons">
                        <a href="/admin" class="btn-primary">Começar Agora</a>
                        <button class="btn-secondary">Saiba Mais</button>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-card-bg"></div>
                    <div class="hero-card">
                        <div class="stat-item">
                            <div class="stat-icon">👥</div>
                            <div class="stat-content">
                                <p>Pessoas Cadastradas</p>
                                <p>1,234</p>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">📘</div>
                            <div class="stat-content">
                                <p>Aulas Ativas</p>
                                <p>12</p>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">🧑‍🏫</div>
                            <div class="stat-content">
                                <p>Professores</p>
                                <p>28</p>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">🏛️</div>
                            <div class="stat-content">
                                <p>Salas</p>
                                <p>8</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-bar" id="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-box">
                    <h3>100%</h3>
                    <p>Confiabilidade</p>
                </div>
                <div class="stat-box">
                    <h3>24/7</h3>
                    <p>Disponível</p>
                </div>
                <div class="stat-box">
                    <h3>0%</h3>
                    <p>Taxa de Erro</p>
                </div>
                <div class="stat-box">
                    <h3>∞</h3>
                    <p>Suporte</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Funcionalidades Principais</h2>
                <p>Tudo que você precisa para gerenciar sua igreja</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">👥</div>
                    <h3>Gestão de Pessoas</h3>
                    <p>Cadastre e organize todos os membros da sua comunidade com facilidade</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🧑‍🏫</div>
                    <h3>Professores</h3>
                    <p>Gerencie professores e suas atribuições de forma centralizada</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📘</div>
                    <h3>Aulas</h3>
                    <p>Crie, organize e acompanhe todas as aulas e atividades</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🏛️</div>
                    <h3>Salas</h3>
                    <p>Controle a disponibilidade e alocação de salas</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Relatórios</h3>
                    <p>Gere relatórios detalhados e análises importantes</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3>Segurança</h3>
                    <p>Dados protegidos com as melhores práticas de segurança</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Performance</h3>
                    <p>Sistema rápido e responsivo para melhor experiência</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🌐</div>
                    <h3>Acesso Remoto</h3>
                    <p>Acesse de qualquer lugar, a qualquer momento</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Pronto para começar?</h2>
            <p>Simplifique a gestão da sua Igreja com Ecclesia</p>
            <a href="/admin" class="btn-light">Acessar Painel Administrativo</a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="logo" style="margin-bottom: 12px;">
                        <div class="logo-icon">✝️</div>
                        <span>Ecclesia</span>
                    </div>
                    <p>Gestão inteligente para igrejas</p>
                </div>
                <div class="footer-col">
                    <h4>Links Rápidos</h4>
                    <a href="#features">Funcionalidades</a>
                    <a href="#stats">Estatísticas</a>
                    <a href="/admin">Painel Admin</a>
                </div>
                <div class="footer-col">
                    <h4>Contato</h4>
                    <p>Email: contato@ecclesia.com</p>
                    <p>Telefone: (11) 9999-9999</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 Ecclesia - Sistema de Gestão de Igreja. Desenvolvido com ❤️ por Jou Oliveira Júnior.</p>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>