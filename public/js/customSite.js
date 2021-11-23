$(document).ready(function () {
    var size_item = $(".loadGames .loadGamesItem").size();
    var countItemsLoad = 6;
    $('.loadGames .loadGamesItem:lt('+ countItemsLoad +')').show();
    $('#moreGames').click(function () {
        countItemsLoad = (countItemsLoad + 3 <= size_item) ? countItemsLoad + 3 : size_item;
        $('.loadGames .loadGamesItem:lt('+ countItemsLoad +')').show();
    });
});