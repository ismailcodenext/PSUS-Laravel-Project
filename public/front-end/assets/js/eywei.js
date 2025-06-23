function openTab(event, tabName) {
  let tabPanels = document.getElementsByClassName("tab_panel");
  for (let panel of tabPanels) {
    panel.classList.remove("active");
  }
  let tabItems = document.getElementsByClassName("tab_item");
  for (let item of tabItems) {
    item.classList.remove("active");
  }
  document.getElementById(tabName).classList.add("active");
  event.currentTarget.classList.add("active");
}
