
var badgeNumber = 0;

badgeNumber = sessionStorage.getItem("badgeNumber");
if (badgeNumber === null)
  badgeNumber = 0;

function changeText(id, string) {
  document.getElementById(id).innerHTML = string;
}

function scrollLogo() {
  var scrolltotop = document.scrollingElement.scrollTop / window.innerHeight * 62;
  document.getElementById("main1").style.paddingTop = scrolltotop + 'vh';
  document.getElementById("bait-text").style.opacity = 1 - (document.scrollingElement.scrollTop / window.innerHeight * 1.3);
  document.getElementById("navbar").style.opacity = document.scrollingElement.scrollTop / window.innerHeight;
}

function updateBadge() {
  document.getElementById("cartbadge").innerHTML = badgeNumber;
  sessionStorage.setItem("badgeNumber", badgeNumber);
}

function incrementBadge() {
  badgeNumber++;
  document.getElementById("cartbadge").innerHTML = badgeNumber;
  sessionStorage.setItem("badgeNumber", badgeNumber);
}

document.addEventListener('scroll', scrollLogo, false);
