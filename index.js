const form = document.querySelector('form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();
    // Basic form validation check
    if (!form.name.value.trim() || !form.email.value.trim() || !form.message.value.trim()) {
      alert('Please fill in all required fields.');
      return;
    }
    alert('Thank you for reaching out! We will get back to you shortly.');
    form.reset();
  });