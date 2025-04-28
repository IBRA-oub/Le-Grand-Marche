document.addEventListener("DOMContentLoaded", function () {
    // ---------------POP UP ---------
    const profileIcon = document.getElementById('profileIcon');
    const profilePopup = document.getElementById('profilePopup');

  profileIcon.addEventListener('click', () => {
    profilePopup.style.display = profilePopup.style.display === 'block' ? 'none' : 'block';
  });

  document.addEventListener('click', (e) => {
    if (!document.querySelector('.profile-container').contains(e.target)) {
      profilePopup.style.display = 'none';
    }
  });
})