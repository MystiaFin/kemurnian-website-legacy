articles = $('article');
screen_width = innerWidth

two_columns_max_width = 768
articles_onload = screen_width <= two_columns_max_width ? 6 : 9;
articles_count = articles_onload;
all_articles = articles.length;
more_articles = 9 - (screen_width <= two_columns_max_width);
btn_loadMore = $('.button.stroke');

if(all_articles <= articles_onload) btn_loadMore.remove();

show_articles = (shown_articles) =>
    articles.slice(0, shown_articles).fadeIn();

$(() => {
    articles.hide();
    show_articles(articles_count);
    btn_loadMore.click(() => {
        articles_count += more_articles;
        if (articles_count > all_articles)
            btn_loadMore.hide();
        show_articles(articles_count);
    });
});

// ORIGINAL
// $(document).ready(function(){
// 	$("article").slice(0, 9).fadeIn();
// 	$(".button.stroke").click(function(){
// 		$("article").slice(0, 15).fadeIn();
// 		$(".button.stroke").click(function(){
// 			$("article").slice(0, 90).fadeIn();
// 		});
// 	});
// });