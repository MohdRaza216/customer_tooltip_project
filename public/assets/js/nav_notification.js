document.addEventListener('DOMContentLoaded', function () {
  let notificationWrapper = document.getElementById('notificationWrapper');
  let dropdown = document.querySelector('.notification-dropdown');
  let categoriesElement = document.getElementById('notificationCategories');
  let allContent = document.getElementById('contentAll');
  let messagesContent = document.getElementById('contentMessages');
  let alertsContent = document.getElementById('contentAlerts');

  if (categoriesElement && dropdown && allContent && messagesContent && alertsContent && notificationWrapper) {
    let categories = categoriesElement.children;

    function clearActiveStates() {
      for (const category of categories) {
        category.classList.remove('active');
      }
    }

    function hideAllContent() {
      allContent.style.display = 'none';
      messagesContent.style.display = 'none';
      alertsContent.style.display = 'none';
    }

    function updateActiveCategory(category) {
      clearActiveStates();
      hideAllContent();

      if (category === 'all') {
        allContent.style.display = 'block';
        categories[0].classList.add('active');
      } else if (category === 'messages') {
        messagesContent.style.display = 'block';
        categories[1].classList.add('active');
      } else if (category === 'alerts') {
        alertsContent.style.display = 'block';
        categories[2].classList.add('active');
      }
    }

    for (const category of categories) {
      category.addEventListener('click', function () {
        const categoryType = this.getAttribute('data-category');
        updateActiveCategory(categoryType);
      });
    }

    document.addEventListener('click', function (e) {
      if (notificationWrapper.contains(e.target)) {
        dropdown.style.display = 'block';
      } else {
        dropdown.style.display = 'none';
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === "Escape") {
        dropdown.style.display = 'none';
      }
    });
  }
});
