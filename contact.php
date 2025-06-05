<form action="process.php" method="POST">
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    
    <div class="form-group">
        <label for="telepon">Nomor Telepon:</label>
        <input type="tel" id="telepon" name="telepon" required>
    </div>
    
    <div class="form-group">
        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" required></textarea>
    </div>
    
    <button type="submit" class="btn">Kirim Pesan</button>
</form> 