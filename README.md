# 🗳️ E-Voter Website Project

This project is a simple and functional **E-Voting Website** built using **HTML, CSS, JavaScript, PHP, and MySQL**. It allows registered users to log in, view candidates, cast votes, and view results. Admins can manage candidates and voters through a separate portal.

---

## 🌐 Features

- 🧑‍💼 Voter and Admin login
- 🧾 Voter registration with validation
- 🗳️ Vote casting with one vote per user
- 📊 Real-time vote counting
- 🧑‍⚖️ Admin panel for managing elections, candidates, and voters

---

## 💻 Tech Stack

| Layer        | Technology            |
|--------------|------------------------|
| Frontend     | HTML, CSS, JavaScript |
| Backend      | PHP                   |
| Database     | MySQL (via XAMPP)     |
| Server       | Apache (via XAMPP)    |

---

## 📁 Folder Structure

e-voter-website/
├── admin/ # Admin login and dashboard
├── user/ # Voter portal
├── assets/ # CSS, images, JS files
├── db/ # Database connection files
├── register.php # Voter registration page
├── login.php # Login for voter
├── vote.php # Voting logic
└── results.php # Display election results


---

## ⚙️ Setup Instructions

1. ✅ Install [XAMPP](https://www.apachefriends.org/)
2. ✅ Start **Apache** and **MySQL**
3. ✅ Copy project folder into `htdocs`
4. ✅ Import the SQL file in **phpMyAdmin** (`e_voting.sql` if available)
5. ✅ Open browser and go to:  
http://localhost/e-voter-website/

---

## 🧪 Sample Credentials

- **Admin Login**
- 📧 `admin@gmail.com`
- 🔑 `admin123`
- **Sample Voter**
- Register via `register.php` and login to vote

---

## 📸 Screenshots

![Screenshot (200)](https://github.com/user-attachments/assets/b3ce3116-ceb5-476d-889a-6c1c4156e515)
![Screenshot (201)](https://github.com/user-attachments/assets/87baff30-6c79-4493-9378-9bec32ef4af1)



---

## ✅ Functional Highlights

- Secure voting system ensuring 1 vote per user
- Admin can view vote stats
- Dynamic candidate management
- Voter details stored securely

---

## 🔐 Security Notes

- Basic validation on inputs
- One-person-one-vote logic enforced
- No direct URL access without login

---

## 🙋‍♂️ Author

**Yokesh K. S.**  
GitHub: [@YOKESHKS](https://github.com/YOKESHKS)

---

## 📃 License

This project is for educational use. Customize and improve as per your needs.

