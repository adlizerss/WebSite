document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
      const username = document.getElementById('username').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
  
      if (!username || !email || !password) {
        event.preventDefault();
        alert('All fields are required.');
      } else {
        // Optional: Add more validations such as password length or email format
      }
    });
  });
  