let Table = new DataTable(".datatable");
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab-link");

  tabs.forEach((tab) => {
    tab.addEventListener("click", function () {
      const tabId = this.getAttribute("data-bs-target");

      const params = new URLSearchParams();
      params.append("tab", tabId);

      window.location.href = `?${params.toString()}`;
    });
  });
});
