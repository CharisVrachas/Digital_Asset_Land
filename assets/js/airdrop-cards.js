var numOfHotCards = $(".hot-list .airdrop-card").length;

if(numOfHotCards > 4) {
  numOfHotCards.style.overflow = "scroll";
}