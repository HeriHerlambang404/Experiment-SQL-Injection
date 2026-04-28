<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Dashboard | System Access</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        body { 
            display: flex; 
            background: #f4f7fe; 
            min-height: 100vh; 
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: #2D31FA;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 { font-size: 1.5rem; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px; }
        .sidebar nav p { margin: 15px 0; cursor: pointer; opacity: 0.8; transition: 0.3s; }
        .sidebar nav p:hover { opacity: 1; padding-left: 5px; }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 30px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .welcome-msg h1 { color: #1b1e5e; font-size: 1.8rem; }
        .status-badge { background: #e7f0ff; color: #2D31FA; padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .card h3 { color: #888; font-size: 0.9rem; margin-bottom: 10px; }
        .card .amount { font-size: 1.5rem; font-weight: bold; color: #2D31FA; }
        .card .trend { color: #27ae60; font-size: 0.8rem; margin-top: 10px; }

        /* Table Section */
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { text-align: left; color: #888; font-size: 0.8rem; padding: 10px; border-bottom: 1px solid #eee; }
        td { padding: 15px 10px; border-bottom: 1px solid #eee; font-size: 0.9rem; }

        .btn-logout {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #ff4757;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>FinTrack AI</h2>
        <nav>
            <p>📊 Dashboard</p>
            <p>💸 Transaksi</p>
            <p>📈 Laporan</p>
            <p>⚙️ Pengaturan</p>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <div class="welcome-msg">
                <h1>🎉 Selamat Datang, Admin</h1>
                <p>Status: <span class="status-badge">Authenticated via SQL Injection</span></p>
            </div>
        </header>

        <!-- Stats -->
        <div class="stats-grid">
            <div class="card">
                <h3>Total Saldo</h3>
                <p class="amount">Rp 1.250.000.000</p>
                <p class="trend">↑ 12% bulan ini</p>
            </div>
            <div class="card">
                <h3>Pengeluaran</h3>
                <p class="amount">Rp 45.300.000</p>
                <p class="trend" style="color: #e74c3c;">↓ 5% dari limit</p>
            </div>
            <div class="card">
                <h3>Efisiensi Sistem</h3>
                <p class="amount">99.9%</p>
                <p class="trend">Bypass Successful</p>
            </div>
        </div>

        <!-- Recent Transactions -->
        <div class="table-container">
            <h3>Transaksi Terakhir</h3>
            <table>
                <thead>
                    <tr>
                        <th>TANGGAL</th>
                        <th>KETERANGAN</th>
                        <th>KATEGORI</th>
                        <th>JUMLAH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>28 Apr 2026</td>
                        <td>Server Maintenance Bypass</td>
                        <td>Security</td>
                        <td>Rp 0</td>
                    </tr>
                    <tr>
                        <td>27 Apr 2026</td>
                        <td>Investment Dividend</td>
                        <td>Income</td>
                        <td>+Rp 15.000.000</td>
                    </tr>
                </tbody>
            </table>
            <a href="login.php" class="btn-logout">Logout / Coba Lagi</a>
        </div>
    </div>

</body>
</html>