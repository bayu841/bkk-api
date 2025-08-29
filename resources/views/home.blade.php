<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,2&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Satoshi Variable', sans-serif;
        }

        .btn-navbar {
            padding: 12px 12px;
            width: 200px;
            color: #fff;
            background-color: #406AE7;
            border: none;
        }

        nav {
            background-color: #ffffff;
            font-weight: bold;
            height: 80px;
            width: 100%;
            position: fixed;
            left: 0;
            right: 0;
            display: flex;
            box-shadow: 0px 0px 1px 1px rgb(0, 0, 0, 0.3);
            z-index: 999;
        }

        nav ul {
            display: flex;
            gap: 24px;
            justify-content: center;
            align-items: center;
            list-style: none;
        }

        nav ul li a {
            color: #000000;
            text-decoration: none;
        }

        nav ul img {
            margin-right: 45rem;
            margin-left: 2rem;
        }

        .hero {
            padding: 7rem;
            padding-top: 10rem;
        }

        .hero img {
            width: 20px background-image: url('/image/hero.png');
        }

        .hero h1 {
            font-weight: bold;
        }

        .input1 {
            padding: 12px 12px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 0px 1px 1px rgb(0, 0, 0, 0.3);
        }

        .dropdown {
            padding: 12px 12px;
            width: 200px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 1px 1px rgb(0, 0, 0, 0.3);
        }

        select {
            width: 250px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            color: #555;
            outline: none;
            height: 42px;
        }

        select:focus {
            border-color: #3c53d1;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }

        .search {
            padding: 12px 12px;
            color: #fff;
            background-color: #3c53d1;
            width: 50px;
            border-radius: 5px;
            text-align: center;
        }

        .container-2 {
            display: flex;
            gap: 5px;
        }

        .daftar {
            padding: 12px 12px;
            color: #ffffff;
            border-radius: 5px;
            border: none;
            background-color: #3c53d1;
        }

        .wave img {
            margin-top: -3rem;
            width: 100%;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1100px;
            margin: 50px auto;
            gap: 40px;
            width: 100%;
        }

        /* KIRI */
        .left {
            flex: 1;
            position: relative;
        }

        .main-img {
            width: 100%;
            border-radius: 16px;
            object-fit: cover;
        }

        .small-img {
            position: absolute;
            bottom: 20px;
            right: -20px;
            width: 150px;
            border-radius: 12px;
            border: 4px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .badge {
            position: absolute;
            bottom: -40px;
            left: 0;
            background: #2563eb;
            color: white;
            padding: 15px 25px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .badge span {
            display: block;
            font-size: 12px;
            font-weight: normal;
        }

        /* KANAN */
        .right {
            flex: 1;
        }

        .right h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .right p {
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 25px;
            color: #555;
        }

        .card {
            background: white;
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .icon {
            width: 40px;
            height: 40px;
            background: #e0f2ff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 18px;
            color: #2563eb;
        }

        .profile {
            display: flex;
            align-items: center;
            margin: 20px 0;
            gap: 12px;
        }

        .profile img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s
        }

        .btn:hover {
            background: #1d4ed8;
        }

        .container-4 {
            display: flex;
            max-width: 1200px;
            margin: 30px auto;
            gap: 20px;
        }


        .left {
            flex: 2;
        }

        .left h2 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .left p {
            color: #666;
            margin-bottom: 20px;
        }

        .kategori {
            background: #406AE7;
            padding: 50px 20px;
            color: #fff;
            text-align: center;
            margin-top: -4rem;
        }

        .kategori-header h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .kategori-header p {
            font-size: 14px;
            margin-bottom: 40px;
        }

        .kategori-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: auto;
        }

        .kategori-card {
            background: #fff;
            color: #333;
            padding: 25px 15px;
            border-radius: 12px;
            text-align: center;
            transition: 0.3s;
            cursor: pointer;
        }

        .kategori-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .kategori-card i {
            font-size: 28px;
            color: #406AE7;
            margin-bottom: 12px;
            display: block;
        }

        .kategori-card span {
            font-size: 14px;
            font-weight: bold;
        }

        .job-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            border-radius: 12px;
            padding: 15px 20px;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .job-info {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .job-info img {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            object-fit: contain;
            background: #fff;
            padding: 5px;
        }

        .job-text h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .job-text p {
            font-size: 13px;
            color: #555;
        }

        .qr {
            width: 70px;
            height: 70px;
            background: #eee;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #999;
        }

        .btnnn {
            display: flex;
        }

        .previous {
            padding: 12px 12px;
            color: #3c53d1;
            background-color: #ffffff;
            border: none;
            box-shadow: 0px 0px 1px 1px rgb(0, 0, 0, 0.3);
            border-radius: 5px;
        }

        .next {
            padding: 12px 12px;
            color: #fff;
            background-color: #3c53d1;
            border: none;
            margin-left: 10px;
            border-radius: 5px;
            text-align: center;
            width: 70px;
        }

        .right {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .profile {
            background: white;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            text-align: center;

        }

        .profile img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .profile h4 {
            margin-bottom: 5px;
        }

        .steps,
        .latest {
            background: white;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .steps h3,
        .latest h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .steps ul {
            list-style: none;
        }

        .steps ul li {
            margin-bottom: 10px;
            font-size: 14px;
            color: #555;
        }

        .latest ul {
            list-style: none;
        }

        .latest ul li {
            margin-bottom: 12px;
            font-size: 14px;
            color: #333;
        }

        .latest ul li small {
            display: block;
            color: #777;
            font-size: 12px;
        }

        .mitra {
            text-align: center;
            padding: 50px 0;
            margin-top: 40px;
        }

        .mitra-img img {
            margin-left: 5rem;

        }

        .testimoni {
            text-align: center;
            padding: 50px 0;
            background-color: #ffffff;
            margin-top: 40px;
        }

        :root {
            --primary: #3b6ef6;
            --text: #0e1b25;
            --muted: #6b7a8c;
            --shadow: 0 10px 25px rgba(16, 38, 84, .12);
            --radius: 14px;
        }

        .ts-wrapper {
            max-width: 1100px;
            margin: 0 auto 80px;
            padding: 10px 16px 70px;
            position: relative;
        }

        .ts-viewport {
            overflow: hidden;
            position: relative;
            padding: 30px 0 70px;
        }

        .ts-track {
            display: flex;
            align-items: center;
            gap: 28px;
            transition: transform .6s cubic-bezier(.22, .61, .36, 1);
            will-change: transform;
        }

        .ts-card {
            flex: 0 0 320px;
            background: #ffffff;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 26px 22px 26px;
            text-align: center;
            transition: transform .45s ease, background .35s ease, color .35s ease;
            position: relative;
        }

        .ts-avatar {
            width: 74px;
            height: 74px;
            border-radius: 50%;
            margin: -50px auto 14px;
            border: 4px solid #fff;
            box-shadow: 0 6px 16px rgba(16, 38, 84, .18);
            overflow: hidden;
            display: grid;
            place-items: center;
            background: #dbe6ff;
            color: #234;
            font-weight: 700;
        }

        /* Jika ingin pakai gambar, ganti isi .ts-avatar dengan <img> */
        .ts-name {
            font-weight: 700;
            font-size: 16px;
        }

        .ts-role {
            color: var(--muted);
            font-size: 12px;
            margin-top: 6px;
            line-height: 1.35;
        }

        .ts-stars {
            margin: 12px 0 6px;
            color: #ffb31a;
            letter-spacing: 2px;
            font-size: 18px;
        }

        .ts-score {
            font-weight: 700;
            margin-left: 6px;
            color: #2a2e3b;
        }

        .ts-desc {
            color: #4b5a6b;
            font-size: 13px;
            line-height: 1.6;
            margin-top: 8px;
        }

        .ts-card.active {
            background: var(--primary);
            color: #fff;
            transform: translateY(-6px) scale(1.02);
        }

        .ts-card.active .ts-role,
        .ts-card.active .ts-desc {
            color: rgba(255, 255, 255, .92)
        }

        .ts-card.active .ts-stars {
            color: #fff88a
        }

        .ts-card.active .ts-score {
            color: #fff
        }

        .ts-card.left {
            transform: perspective(800px) rotateZ(-6deg) translateY(10px) scale(.96);
            opacity: .96;
        }

        .ts-card.right {
            transform: perspective(800px) rotateZ(6deg) translateY(10px) scale(.96);
            opacity: .96;
        }

        .ts-nav {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            pointer-events: none;
        }

        .ts-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 2px solid var(--primary);
            background: #fff;
            color: var(--primary);
            display: grid;
            place-items: center;
            cursor: pointer;
            user-select: none;
            transition: background .25s ease, color .25s ease, transform .25s ease;
            pointer-events: auto;
        }

        .ts-btn:hover {
            background: var(--primary);
            color: #fff
        }

        .ts-btn:active {
            transform: scale(.95)
        }

        .ts-dots {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 0 6px;
            pointer-events: auto;
        }

        .ts-dot {
            width: 28px;
            height: 6px;
            border-radius: 999px;
            background: #c9d5ff;
            transition: width .3s ease, background .3s ease;
            cursor: pointer;
        }

        .ts-dot.active {
            width: 42px;
            background: var(--primary)
        }

        .tracer {
            max-width: 1100px;
            margin: 60px auto 80px;
            padding: 22px;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(16, 38, 84, .08);
            display: grid;
            grid-template-columns: 360px 1fr;
            gap: 26px;
            align-items: center;
        }

        .tracer img {
            width: 100%;
            max-width: 360px;
            height: auto;
            display: block;
            border-radius: 12px;
            object-fit: cover;
            margin-left: 5rem;
        }

        .tracer h1 {
            font-size: clamp(26px, 4vw, 40px);
            line-height: 1.15;
            margin-bottom: 10px;
            color: #0e1b25;
            margin-left: 5rem;
        }

        .tracer p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 16px;
            max-width: 60ch;
            margin-left: 5rem;
        }

        .tracer .detail {
            padding: 12px 18px;
            border: none;
            border-radius: 8px;
            background: #2563eb;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: background .2s ease, transform .05s ease, box-shadow .2s ease;
            box-shadow: 0 6px 14px rgba(37, 99, 235, .25);
            margin-left: 5rem;
        }

        .tracer .detail:hover,
        .tracer .detail:focus-visible {
            background: #1d4ed8;
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(29, 78, 216, .35);
        }

        .news-section {
            max-width: 1100px;
            margin: 40px auto 80px;
            padding: 0 16px;
            color: #0f172a;

        }

        /* Header */
        .news-header h2 {
            font-size: clamp(26px, 4vw, 34px);
            line-height: 1.2;
            margin-bottom: 6px;
        }

        .news-subtitle {
            color: #6b7280;
            margin-bottom: 16px;
        }

        /* Grid 2 kolom: feature + list */
        .news-grid {
            display: grid;
            grid-template-columns: 1.2fr .9fr;
            gap: 26px;
            align-items: start;
        }

        /* Kartu berita utama (kiri) */
        .news-feature {
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(16, 38, 84, .08);
            overflow: hidden;
            position: relative;
        }

        .news-thumb {
            margin: 0;
            aspect-ratio: 16/9;
            overflow: hidden;
        }

        .news-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .news-meta {
            padding: 12px 16px 0;
        }

        .news-date {
            display: inline-block;
            font-size: 12px;
            color: #6b7280;
            background: #f3f4f6;
            padding: 6px 10px;
            border-radius: 8px;
        }

        .news-feature .news-title {
            padding: 10px 16px 16px;
            font-size: clamp(16px, 2.2vw, 20px);
            line-height: 1.45;
            font-weight: 700;
            color: #0f172a;
        }

        /* Actions: nav, semua berita, read icon */
        .news-actions {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            gap: 10px;
            padding: 0 16px 16px 16px;
        }

        .news-nav {
            display: flex;
            gap: 6px;

        }

        .news-btn {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            background: #fff;
            color: #334155;
            cursor: pointer;
            transition: background .2s ease, color .2s ease, border-color .2s ease, transform .05s ease;
            align-items: center;
            justify-content: center;
            margin: 1rem auto;
            display: flex;
        }

        .news-btn:hover {
            background: #3b82f6;
            color: #fff;
            border-color: #3b82f6;
        }

        .news-btn:active {
            transform: translateY(1px);
        }

        .news-all {
            justify-self: start;
            display: inline-block;
            font-size: 13px;
            background: #3b82f6;
            color: #fff;
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
            box-shadow: 0 6px 14px rgba(59, 130, 246, .25);
        }

        .news-all:hover {
            background: #2563eb;
        }

        .news-read {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: #e5edff;
            color: #1e3a8a;
            text-decoration: none;
        }

        /* Kolom kanan: list ringkas */
        .news-list {
            display: grid;
            gap: 10px;
        }

        .news-card {
            position: relative;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(16, 38, 84, .08);
            background: #000;
            height: 250px;
        }

        .news-card img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            opacity: .9;
            transition: transform .5s ease;
        }

        .news-card:hover img {
            transform: scale(1.03);
        }

        /* Overlay judul dan tombol */
        .news-card-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 14px;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, .45) 100%);
        }

        .news-card-title {
            margin: 0 0 8px 0;
            color: #fff;
            font-size: 14px;
            line-height: 1.45;
            font-weight: 700;
            text-shadow: 0 2px 8px rgba(0, 0, 0, .35);
        }

        .news-card-link {
            align-self: start;
            background: #3b82f6;
            color: #fff;
            text-decoration: none;
            font-size: 12px;
            padding: 8px 10px;
            border-radius: 8px;
            transition: background .2s ease;
        }

        .news-card-link:hover {
            background: #2563eb;
        }

        .agenda {
            max-width: 1100px;
            margin: 40px auto 80px;
            padding: 0 16px;
            color: #0f172a;
            font-family: 'Satoshi Variable', system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
        }

        .agenda-header h2 {
            font-size: clamp(26px, 4vw, 36px);
            line-height: 1.2;
            margin-bottom: 12px;
        }

        .agenda-grid {
            display: grid;
            grid-template-columns: 1fr 0.9fr;
            gap: 24px;
            align-items: start;
        }

        /* List kiri */
        .agenda-list {
            display: grid;
            gap: 14px;
        }

        .agenda-item {
            display: grid;
            grid-template-columns: 112px 1fr;
            gap: 14px;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(16, 38, 84, .08);
            padding: 12px;
            align-items: center;
        }

        .agenda-item img {
            width: 112px;
            height: 88px;
            object-fit: cover;
            border-radius: 10px;
        }

        .agenda-title {
            margin: 0 0 6px 0;
            font-size: 16px;
            font-weight: 700;
        }

        .agenda-desc {
            margin: 0 0 10px 0;
            font-size: 13px;
            color: #616d7e;
            line-height: 1.5;
        }

        .agenda-actions {
            display: grid;
            grid-template-columns: auto 1fr;
            align-items: center;
            gap: 10px;
        }

        .agenda-date {
            justify-self: end;
            font-size: 12px;
            color: #7c8aa0;
        }

        /* Tombol */
        .btn-primary {
            display: inline-block;
            background: #3b82f6;
            color: #fff;
            padding: 8px 12px;
            font-size: 13px;
            border-radius: 8px;
            text-decoration: none;
            box-shadow: 0 6px 14px rgba(59, 130, 246, .25);
            transition: background .2s ease, transform .05s ease;
        }

        .btn-primary:hover {
            background: #2563eb;
            transform: translateY(-1px);
        }

        .btn-secondary {
            display: inline-block;
            background: #1f51f2;
            color: #fff;
            padding: 10px 14px;
            font-size: 13px;
            border-radius: 10px;
            text-decoration: none;
            box-shadow: 0 6px 14px rgba(31, 81, 242, .25);
            transition: background .2s ease, transform .05s ease;
        }

        .btn-secondary:hover {
            background: #1643d8;
            transform: translateY(-1px);
        }

        .btn-secondary.light {
            background: #ffffff;
            color: #1f51f2;
        }

        .btn-secondary.light:hover {
            background: #eaf0ff;
        }

        .btn-ghost {
            display: inline-block;
            width: max-content;
            border: 1px solid #cbd5e1;
            color: #334155;
            background: #fff;
            padding: 10px 14px;
            border-radius: 10px;
            text-decoration: none;
            transition: background .2s ease, border-color .2s ease;
        }

        .btn-ghost:hover {
            background: #f4f7ff;
            border-color: #9db2ff;
        }

        .all-agenda {
            margin-top: 6px;
        }

        /* Kanan */
        .agenda-side {
            display: grid;
            gap: 16px;
        }

        /* Featured card besar */
        .feature-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(16, 38, 84, .08);
            overflow: hidden;
        }

        .feature-media {
            margin: 0;
            aspect-ratio: 16/9;
            overflow: hidden;
        }

        .feature-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .feature-body {
            padding: 14px 14px 16px;
        }

        .feature-title {
            margin: 0 0 6px 0;
            font-size: 16px;
            line-height: 1.45;
            font-weight: 700;
        }

        .feature-meta {
            margin: 0 0 10px 0;
            font-size: 12px;
            color: #7c8aa0;
        }

        /* Promo card biru + gambar */
        .promo-card {
            position: relative;
            background: #3b82f6;
            color: #fff;
            border-radius: 16px;
            overflow: hidden;
            min-height: 140px;
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            padding: 16px;
            box-shadow: 0 10px 25px rgba(16, 38, 84, .08);
        }

        .promo-body {
            z-index: 1;
        }

        .promo-title {
            margin: 0 0 6px 0;
            font-size: 18px;
            line-height: 1.25;
        }

        .promo-meta {
            margin: 0 0 10px 0;
            font-size: 12px;
            color: rgba(255, 255, 255, .9);
        }

        .promo-img {
            width: 140px;
            height: auto;
            object-fit: contain;
            justify-self: end;
            filter: drop-shadow(0 8px 18px rgba(0, 0, 0, .2));
        }

        .form {
            text-align: center;
        }

        .contact-section {
            text-align: center;
            padding: 40px 20px;
            background-color: #ffffff;
        }

        .contact-section h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .contact-section p {
            font-size: 14px;
            color: #555;
            margin-bottom: 30px;
        }

        .contact-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 40px;
            max-width: 1000px;
            margin: auto;
        }

        .contact-form {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            text-align: left;
            font-size: 14px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 15px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background: #e9ecef;
            font-size: 14px;
        }

        .contact-form button {
            padding: 12px;
            background-color: #2b65f7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .contact-form button:hover {
            background-color: #1d4ed8;
        }

        .contact-info {
            flex: 1;
            text-align: left;
        }

        .map {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .address {
            font-size: 14px;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .address i {
            color: red;
            margin-right: 5px;
        }

        .social-links img {
            width: 30px;
            margin-top: -2rem;

        }

        .social-links a:hover {
            color: #2b65f7;
        }

        .footer {
            background-color: #ffffff;
            padding: 40px 60px;
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 30px;
        }

        .footer-logo {
            max-width: 160px;
            margin-bottom: 15px;
        }

        .footer h3 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .footer p {
            font-size: 14px;
            line-height: 1.6;
            color: #333;
        }

        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer ul li {
            margin-bottom: 8px;
        }

        .footer ul li a {
            text-decoration: none;
            font-size: 14px;
            color: #333;
            transition: 0.3s;
        }

        .footer ul li a:hover {
            color: #007bff;
        }

        .footer .logo {
            font-size: 24px;
            font-weight: bold;
            color: #1e62d0;
            margin-bottom: 10px;
        }

        .footer .social {
            margin: 15px 0;
        }

        .footer .social a {
            display: inline-block;
            margin-right: 10px;
            font-size: 16px;
            color: #333;
            transition: 0.3s;
        }

        .footer .social a:hover {
            color: #007bff;
        }

        .footer .logos img {
            height: 30px;
            margin: 5px 10px 0 0;
        }
    </style>
    <nav>
        <ul>
            <li><img src="{{ asset('image/logo.png') }}" alt="" width="200"></li>
            <li><a href="">Beranda</a></li>
            <li><a href="">Tentang</a></li>
            <li><a href="">Loker</a></li>
            <li><a href="">Perusahaan</a></li>
        </ul>
    </nav><br><br><br><br>
    <div class="hero">
        <p>SMKN 6 JEMBER</p>
        <h1>Cari Lowongan Kerja</h1>
        <div class="container-2">
            <div class="input">
                <input type="text" placeholder="Posisi/Perusaahaan" class="input1">
                <select>
                    <option selected disabled>Pilih Lokasi</option>
                    <option value="developer">Jember</option>
                    <option value="designer">Malang</option>
                    <option value="marketing">Surabaya</option>
                    <option value="manager">Sidoarjo</option>
                </select>
            </div>
            <div class="search">Cari</div>
        </div><br>
        <p>Daftar Sekarang dan dapatkan pekerjaan secepatnya</p><br>
        <button class="daftar">Daftar Sekarang</button>
    </div>
    <div class="wave">
        <img src="{{ asset('image/Vector 46.png') }}" alt="" width="100%">
        <section class="kategori">
            <div class="kategori-header">
                <h2>Kategori</h2>
                <p>Kami menyediakan berbagai kategori perusahaan sesuai bidang anda</p>
            </div>

            <div class="kategori-container">
                <div class="kategori-card">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Administrasi</span>
                </div>
                <div class="kategori-card">
                    <i class="fas fa-user-cog"></i>
                    <span>Operator</span>
                </div>
                <div class="kategori-card">
                    <i class="fas fa-tools"></i>
                    <span>Teknisi</span>
                </div>
                <div class="kategori-card">
                    <i class="fas fa-industry"></i>
                    <span>Industri</span>
                </div>
                <div class="kategori-card">
                    <i class="fas fa-network-wired"></i>
                    <span>IT / TIK</span>
                </div>
                <div class="kategori-card">
                    <i class="fas fa-notes-medical"></i>
                    <span>Kesehatan</span>
                </div>
            </div>
        </section>
        <img src="{{ asset('image/Vector 47.png') }}" alt="">
    </div>
    <div class="container">

        <div class="left">
            <img src="{{ asset('image/Rectangle 463.png') }}" class="main-img" alt="Foto Utama">
            <img src="{{ asset('image/Rectangle 464.png') }}" class="small-img" alt="Foto Kecil">
            <div class="badge">1.000+ <span>Siswa Unggul</span></div>
        </div>

        <div class="right">
            <h2>Tentang BKK</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <div class="card">
                <div class="icon">💼</div>
                <div>
                    <strong>Lowongan Kerja Terbaik</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="card">
                <div class="icon">🌐</div>
                <div>
                    <strong>Relasi Luas</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="profile" style="width: 500px">
                <img src="{{ asset('image/Rectangle 464.png') }}" alt="Profil">
                <div>
                    <strong>Audryan, S.Pd</strong><br>
                    <small>Guru BKK</small>
                </div>
                <a href="#" class="btn">Hubungi Sekarang</a>
            </div>
        </div>
    </div><br><br><br>
    <div class="container-4">

        <div class="left">
            <h2>Lowongan Pekerjaan</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

            <div class="job-card">
                <div class="job-info">
                    <img src="{{ asset('image/Rectangle 444.png') }}" alt="Logo">
                    <div class="job-text">
                        <h3>Welding Leader | PT Yogya Presisi</h3>
                        <p>Lokasi: Surabaya | Deadline: 30 Sept 2025</p>
                    </div>
                </div>
                <img src="{{ asset('image/Rectangle 445.png') }}" alt="">
            </div>

            <div class="job-card">
                <div class="job-info">
                    <img src="{{ asset('image/Rectangle 444 (1).png') }}" alt="Logo">
                    <div class="job-text">
                        <h3>Staf Crew | PT Duta Intibudimaya (MR DIY)</h3>
                        <p>Lokasi: Jakarta | Deadline: 15 Okt 2025</p>
                    </div>
                </div>
                <img src="{{ asset('image/Rectangle 445.png') }}" alt="">
            </div>
            <div class="job-card">
                <div class="job-info">
                    <img src="{{ asset('image/Rectangle 444 (2).png') }}" alt="Logo">
                    <div class="job-text">
                        <h3>Salesman | PT INDOOFOOD ICBP</h3>
                        <p>Lokasi: Jakarta | Deadline: 15 Okt 2025</p>
                    </div>
                </div>
                <img src="{{ asset('image/Rectangle 445.png') }}" alt="">
            </div>
            <div class="job-card">
                <div class="job-info">
                    <img src="{{ asset('image/Rectangle 444 (3).png') }}" alt="Logo">
                    <div class="job-text">
                        <h3>Operator Pola | PT Duta Intibudimaya</h3>
                        <p>Lokasi: Jakarta | Deadline: 15 Okt 2025</p>
                    </div>
                </div>
                <img src="{{ asset('image/Rectangle 445.png') }}" alt="">
            </div>

            <div class="job-card">
                <div class="job-info">
                    <img src="{{ asset('image/Rectangle 444 (4).png') }}" alt="Logo">
                    <div class="job-text">
                        <h3>Salesman | PT LAVILA KREATIV Perkasa</h3>
                        <p>Lokasi: Bandung | Deadline: 5 Okt 2025</p>
                    </div>
                </div>
                <img src="{{ asset('image/Rectangle 445.png') }}" alt="">
            </div>
            <div class="btnnn">
                <button class="previous">Previous</button>
                <button class="next">Next</button>
            </div>
        </div>
        <!-- RIGHT SIDE -->
        <div class="right">
            <div class="profile">
                <img src="{{ asset('image/Rectangle 444 (5).png') }}" alt="Profile">
                <h4>BKK Admin</h4>
                <small>SMK Example</small>
            </div>

            <div class="steps">
                <h3>Alur Pendaftaran Pekerjaan</h3>
                <ul>
                    <li>1. Daftar Akun</li>
                    <li>2. Login Akun</li>
                    <li>3. Verifikasi Akun</li>
                    <li>4. Pilih atau Cari Loker</li>
                    <li>5. Daftar Pekerjaan</li>
                    <li>5. Daftar Ulang</li>
                </ul>
            </div>

            <div class="latest">
                <h3>Lowongan Teratas</h3>
                <ul>
                    <li>Operator Produksi | PT ABC <small>Jakarta</small></li>
                    <li>Admin Kantor | PT XYZ <small>Bandung</small></li>
                    <li>Marketing | PT Maju Jaya <small>Surabaya</small></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mitra">
        <h2>Mitra Kami</h2>
        <p>Kami Telah Bekerja sama dengan <br>
            Beberapa perushaan besar</p><br>
        <div class="mitra-img">
            <img src="{{ asset('image/mitra1.png') }}" alt="" width="130">
            <img src="{{ asset('image/mitra2.png') }}" alt="" width="130">
            <img src="{{ asset('image/mitra3.png') }}" alt="" width="130">
            <img src="{{ asset('image/mitra4.png') }}" alt="" width="130">
            <img src="{{ asset('image/mitra5.png') }}" alt="" width="130">
        </div>
    </div>
    <div class="testimoni">
        <h2>Testimoni ALumni</h2>
        <p>Yuk intip apa kata alumni tentang BKK</p>
    </div>
    <section class="ts-wrapper" id="testimoni-slider">
        <div class="ts-viewport">
            <div class="ts-track" role="list">
                <!-- Card 1 -->
                <article class="ts-card left" role="listitem" aria-label="Testimoni 1">
                    <div class="ts-avatar">HD</div>
                    <div class="ts-name">Helena Dwi Hapsari</div>
                    <div class="ts-role">Alumni RPL, Angkatan 2022 · CEO Gojek</div>
                    <div class="ts-stars" aria-label="Rating 5 dari 5">★★★★★ <span class="ts-score">5.0</span></div>
                    <p class="ts-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore.</p>
                </article>

                <!-- Card 2 (aktif) -->
                <article class="ts-card active" role="listitem" aria-label="Testimoni 2">
                    <div class="ts-avatar">HD</div>
                    <div class="ts-name">Helena Dwi Hapsari</div>
                    <div class="ts-role">Alumni RPL, Angkatan 2022 · CEO Gojek</div>
                    <div class="ts-stars" aria-label="Rating 5 dari 5">★★★★★ <span class="ts-score">5.0</span></div>
                    <p class="ts-desc">Program BKK sangat membantu. Jaringan industrinya luas dan prosesnya rapi.</p>
                </article>

                <!-- Card 3 -->
                <article class="ts-card right" role="listitem" aria-label="Testimoni 3">
                    <div class="ts-avatar">HD</div>
                    <div class="ts-name">Helena Dwi Hapsari</div>
                    <div class="ts-role">Alumni RPL, Angkatan 2022</div>
                    <div class="ts-stars" aria-label="Rating 5 dari 5">★★★★★ <span class="ts-score">5.0</span></div>
                    <p class="ts-desc">Dari pelatihan hingga penempatan kerja, semuanya terarah dan efektif.</p>
                </article>

                <!-- Card 4 -->
                <article class="ts-card right" role="listitem" aria-label="Testimoni 4">
                    <div class="ts-avatar">HD</div>
                    <div class="ts-name">Helena Dwi Hapsari</div>
                    <div class="ts-role">Alumni RPL, Angkatan 2022</div>
                    <div class="ts-stars" aria-label="Rating 5 dari 5">★★★★★ <span class="ts-score">5.0</span></div>
                    <p class="ts-desc">Rekomendasi banget untuk siswa yang ingin cepat kerja.</p>
                </article>
            </div>

            <div class="ts-nav">
                <button class="ts-btn ts-prev" aria-label="Sebelumnya">‹</button>
                <div class="ts-dots" aria-hidden="true"></div>
                <button class="ts-btn ts-next" aria-label="Berikutnya">›</button>
            </div>
        </div>
    </section>
    <section class="tracer">
        <img src="{{ asset('image/diagram.png') }}" alt="Diagram Tracer Study">
        <div class="tracer-content">
            <h1>Tracer Study</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <button class="detail" type="button">Selengkapnya</button>
        </div>
    </section>
    <section class="agenda" aria-labelledby="agenda-title">
        <div class="agenda-header">
            <h2 id="agenda-title">Agenda</h2>
        </div>
        <div class="agenda-grid">
            <div class="agenda-list">
                <article class="agenda-item">
                    <img src="{{ asset('image/agenda-1.jpg') }}" alt="Tim sedang rapat">
                    <div class="agenda-body">
                        <h3 class="agenda-title">Job Fair 50 Perusahaan</h3>
                        <p class="agenda-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor.</p>
                        <div class="agenda-actions">
                            <a href="#" class="btn-primary">Pre Registrasi</a>
                            <span class="agenda-date">Senin, 12 Agustus 2025</span>
                        </div>
                    </div>
                </article>
                handlebars
                Copy
                <!-- Item 2 -->
                <article class="agenda-item">
                    <img src="{{ asset('image/agenda-2.jpg') }}" alt="Presentasi bisnis">
                    <div class="agenda-body">
                        <h3 class="agenda-title">Bussines Show</h3>
                        <p class="agenda-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor.</p>
                        <div class="agenda-actions">
                            <a href="#" class="btn-primary">Pre Registrasi</a>
                            <span class="agenda-date">Senin, 19 Agustus 2025</span>
                        </div>
                    </div>
                </article>

                <!-- Item 3 -->
                <article class="agenda-item">
                    <img src="{{ asset('image/agenda-3.jpg') }}" alt="Workshop bersama">
                    <div class="agenda-body">
                        <h3 class="agenda-title">Workshop Bareng Google</h3>
                        <p class="agenda-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor.</p>
                        <div class="agenda-actions">
                            <a href="#" class="btn-primary">Pre Registrasi</a>
                            <span class="agenda-date">Senin, 26 Agustus 2025</span>
                        </div>
                    </div>
                </article>

                <a href="#" class="btn-ghost all-agenda">Lihat Semua Agenda</a>
            </div>

            <!-- Kanan: Featured + Promo -->
            <aside class="agenda-side">
                <article class="feature-card">
                    <figure class="feature-media">
                        <img src="{{ asset('image/agenda-feature.jpg') }}" alt="Webinar bersama tim">
                    </figure>
                    <div class="feature-body">
                        <h3 class="feature-title">Webinar Bareng Sam Altman, Krisis Teknologi dalam Dunia Bisnis</h3>
                        <p class="feature-meta">BKK SMKN 6 JEMBER</p>
                        <a href="#" class="btn-secondary">Tonton Video</a>
                    </div>
                </article>

                <article class="promo-card">
                    <div class="promo-body">
                        <h4 class="promo-title">Bingung Nyari Kerja?</h4>
                        <p class="promo-meta">Panduan langkah demi langkah di BKK</p>
                        <a href="#" class="btn-secondary light">Selengkapnya</a>
                    </div>
                    <img class="promo-img" src="{{ asset('image/promo.png') }}" alt="Ilustrasi siswa membawa buku">
                </article>
            </aside>
        </div>

    </section>
    <section class="news-section" aria-labelledby="news-title">
        <div class="news-header">
            <h2 id="news-title">Berita</h2>
            <p class="news-subtitle">Lihat kabar terbaru seputar BKK</p>
        </div>
        <div class="news-grid">
            <!-- Kolom kiri: berita utama -->
            <article class="news-feature">
                <figure class="news-thumb">
                    <img src="{{ asset('image/Rectangle 463.png') }}" alt="Rapat tim membahas grafik dan laporan">
                </figure>

                <div class="news-meta">
                    <span class="news-date">Sabtu, 12 Juli 2025</span>
                </div>

                <h3 class="news-title">
                    BKK SMKN 6 Jember, Jalin Kerja Sama dengan Google Indonesia
                </h3>

                <div class="news-actions">
                    <div class="news-nav">
                        <button class="news-btn prev" type="button" aria-label="Sebelumnya">‹</button>
                        <button class="news-btn next" type="button" aria-label="Berikutnya">›</button>
                    </div>
                    <a href="#" class="news-all">Semua Berita</a>
                    <a href="#" class="news-read" aria-label="Baca berita utama">➔</a>
                </div>
            </article>

            <!-- Kolom kanan: daftar ringkas -->
            <aside class="news-list" aria-label="Berita Lainnya">
                <article class="news-card">
                    <img src="{{ asset('image/Rectangle 463.png') }}" alt="Siswa presentasi di ruang rapat">
                    <div class="news-card-overlay">
                        <h4 class="news-card-title">Siswa SMKN 6 Jember Keterima Kerja di Jepang</h4>
                        <a href="#" class="news-card-link">Selengkapnya</a>
                    </div>
                </article>
                <article class="news-card">
                    <img src="{{ asset('image/Rectangle 463.png') }}" alt="Kolaborasi tim di depan laptop">
                    <div class="news-card-overlay">
                        <h4 class="news-card-title">Siswa SMKN 6 Jember Keterima Kerja di Jepang</h4>
                        <a href="#" class="news-card-link">Selengkapnya</a>
                    </div>
                </article>
            </aside>
        </div>
    </section>
    <section class="contact-section">
        <h2>Kontak</h2>
        <p>Hubungi Kami Kapan Saja</p>

        <div class="contact-container">
            <!-- Form -->
            <form class="contact-form">
                <label for="nama">Nama</label>
                <input type="text" id="nama" placeholder="Masukkan Nama">

                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" placeholder="Masukkan Alamat">

                <label for="nohp">No Hp</label>
                <input type="text" id="nohp" placeholder="Masukkan No HP">

                <label for="pesan">Pesan</label>
                <textarea id="pesan" rows="4" placeholder="Tulis Pesan..."></textarea>

                <button type="submit">Kirim Pesan</button>
            </form>

            <div class="contact-info">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1412.5328379938078!2d113.4347124269006!3d-8.155450754436908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd68b08077adae9%3A0x32c15952de1123cb!2sSMK%20Negeri%206%20Jember!5e0!3m2!1sid!2sid!4v1750121694154!5m2!1sid!2sid"
                    width="100%" height="300" style="border:0; border-radius:8px;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                <p class="address">
                    <i class="fas fa-map-marker-alt"></i>
                    RCVP+R39, Jl. PB.Sudirman, Tekoan,
                    Tanggul Kulon, Kec. Tanggul, Kabupaten Jember, Jawa Timur 68155
                </p>

                <p><b>Hubungi Kami</b></p>
                <div class="social-links">
                    <img src="{{asset('image/image 107.png')}}" alt="">
                    <img src="{{asset('image/image 108.png')}}" alt="">
                    <img src="{{asset('image/image 109.png')}}" alt="">
                </div>
            </div>
    </section>
    <footer class="footer">
        <div>
            <img src="{{ asset('image/logo.png') }}" alt="BKKBISA Logo" class="footer-logo">
            <p>BKKBISA merupakan platform penyedia informasi lowongan pekerjaan berbasis online</p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="logos">
                <img src="{{ asset('image/logokementrian.png') }}">
            </div>
        </div>
        <div>
            <h3>Pencari Kerja</h3>
            <ul>
                <li><a href="#">Pendaftaran</a></li>
                <li><a href="#">Ketentuan Penggunaan</a></li>
                <li><a href="#">Kebijakan Privasi</a></li>
                <li><a href="#">Tips Karier</a></li>
                <li><a href="#">Testimoni</a></li>
                <li><a href="#">Bantuan mencari kerja</a></li>
            </ul>
        </div>
        <div>
            <h3>BKK / Yayasan</h3>
            <ul>
                <li><a href="#">Pendaftaran</a></li>
                <li><a href="#">Masuk</a></li>
                <li><a href="#">Pasang Iklan Lowongan</a></li>
                <li><a href="#">Tracking Alumni</a></li>
                <li><a href="#">Ketentuan Penggunaan</a></li>
                <li><a href="#">Bantuak BKK / Yayasan</a></li>
            </ul>
        </div>
        <div>
            <h3>Perusahaan / UMKM</h3>
            <ul>
                <li><a href="#">Pendaftaran</a></li>
                <li><a href="#">Masuk</a></li>
                <li><a href="#">Pasang Iklan Lowongan</a></li>
                <li><a href="#">Cari Resume</a></li>
                <li><a href="#">Ketentuan Penggunaan</a></li>
                <li><a href="#">Bantuan Perusahaan</a></li>
            </ul>
        </div>
    </footer>
    <script>
        // Slider testimoni tanpa library
        (function() {
            const slider = document.getElementById('testimoni-slider');
            const track = slider.querySelector('.ts-track');
            const cards = Array.from(track.children);
            const prev = slider.querySelector('.ts-prev');
            const next = slider.querySelector('.ts-next');
            const dotsBox = slider.querySelector('.ts-dots');

            let index = 1; // mulai dari kartu ke-2 (aktif)
            const gap = parseFloat(getComputedStyle(track).gap) || 0;

            function cardWidth() {
                return cards[0].getBoundingClientRect().width;
            }

            function setClasses() {
                cards.forEach(c => c.classList.remove('left', 'right', 'active'));
                cards.forEach((c, i) => {
                    if (i < index) c.classList.add('left');
                    else if (i === index) c.classList.add('active');
                    else c.classList.add('right');
                });
            }

            function setTransform() {
                const w = cardWidth() + gap;
                const viewport = slider.querySelector('.ts-viewport');
                const centerOffset = (viewport.clientWidth - w) / 2;
                track.style.transform = `translateX(${centerOffset - index * w}px)`;
            }

            function buildDots() {
                dotsBox.innerHTML = '';
                cards.forEach((_, i) => {
                    const d = document.createElement('div');
                    d.className = 'ts-dot' + (i === index ? ' active' : '');
                    d.addEventListener('click', () => go(i));
                    dotsBox.appendChild(d);
                });
            }

            function go(i) {
                index = (i + cards.length) % cards.length;
                setClasses();
                setTransform();
                buildDots();
            }

            prev.addEventListener('click', () => go(index - 1));
            next.addEventListener('click', () => go(index + 1));
            window.addEventListener('resize', setTransform);

            // Drag/swipe
            let startX = 0,
                dx = 0,
                activePointer = null;
            track.addEventListener('pointerdown', (e) => {
                activePointer = e.pointerId;
                startX = e.clientX;
                dx = 0;
                track.setPointerCapture(activePointer);
            });
            track.addEventListener('pointermove', (e) => {
                if (activePointer === null) return;
                dx = e.clientX - startX;
                const w = cardWidth() + gap;
                const viewport = slider.querySelector('.ts-viewport');
                const centerOffset = (viewport.clientWidth - w) / 2;
                track.style.transform = `translateX(${centerOffset - index * w + dx}px)`;
            });

            function endDrag() {
                if (activePointer === null) return;
                if (Math.abs(dx) > 60) {
                    go(index + (dx < 0 ? 1 : -1));
                } else {
                    setTransform();
                }
                startX = 0;
                dx = 0;
                activePointer = null;
            }
            track.addEventListener('pointerup', endDrag);
            track.addEventListener('pointercancel', endDrag);
            track.addEventListener('pointerleave', endDrag);

            // Auto-play opsional
            let timer = setInterval(() => go(index + 1), 5000);
            slider.addEventListener('mouseenter', () => clearInterval(timer));
            slider.addEventListener('mouseleave', () => {
                timer = setInterval(() => go(index + 1), 5000)
            });

            // Init
            setClasses();
            setTransform();
            buildDots();
        })();
    </script>
</body>

</html>
