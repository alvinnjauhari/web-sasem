<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Daftar Mitra - SASEM: Ship Waste Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{ asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}" />

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="wrapper">
        <div class="inner">
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <h3>Contact Us</h3>
                <p>
                    Form Pendaftaran Mitra Sasem
                </p>
                <label class="form-group">
                    <input type="text" class="form-control" name="company_name" required />
                    <span>Nama Perusahaan Mitra</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <input type="email" class="form-control" name="email" required />
                    <span>Your Mail</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <select name="message" id="message" class="form-control" required>
                        <option value="" disabled selected>Pilih Jenis Mitra</option>
                        <option value="Option 1">SASEM Setor (SA-TOR)</option>
                        <option value="Option 2">SASEM Customer (SA-MER)</option>
                    </select>
                    <span>Your Message</span>
                    <span class="border"></span>
                </label>
                <button type="submit">
                    Submit
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
</body>
</html>
