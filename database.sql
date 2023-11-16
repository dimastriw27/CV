CREATE DATABASE cv;
USE cv;
CREATE TABLE cv_data (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nama VARCHAR(100) NOT NULL,
	alamat TEXT NOT NULL,
	telepon VARCHAR(100) NOT NULL,
	email VARCHAR(255) NOT NULL,
	web VARCHAR(255) NOT NULL,
	pendidikan TEXT NOT NULL,
	pengalaman_kerja TEXT NOT NULL,
	keterampilan TEXT NOT NULL,
	foto_path VARCHAR(255) NOT NULL
);
SELECT * FROM cv_data;
INSERT INTO cv_data(nama,alamat,telepon,email,web,pendidikan,pengalaman_kerja,keterampilan,foto_path) VALUES("Dimas Tri Wicaksono","Taman Lopang Indah FB 7 No. 4, Serang, Banten", "081387533299", "dimastri.258.w@gmail.com", "dimastri.com", "S1 Informatika", "Wirausaha", "C++, HTML, CSS, Javascript, python", "foto.jpg");
	CREATE TABLE comments (
		cv_id INT PRIMARY KEY AUTO_INCREMENT,
		comment_text TEXT NOT NULL
	);
SELECT * FROM comments