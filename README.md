### Q1. Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.

I put `/movies/featured` before `/movies/{id}` in my `routes/web.php`. I did this because Laravel checks the routes from top to bottom. So when I go to `/movies/featured`, Laravel will use the featured route first.

If I put `/movies/{id}` first, Laravel might think that `featured` is the ID. Since I don't have a movie with that ID, it would give me a 404 error instead of showing the featured page.

### Q2. What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?

If someone goes to an ID that is not in my data, like `/movies/99`, my `show()` method checks if the ID exists first.

I used `if (!isset($items[$id])) { abort(404); }`. If the ID is not found, Laravel stops the request and shows the 404 page. This also prevents the program from trying to get data that doesn't exist.

### Q3. Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.

I used route names like `route('movies.show', $item['id'])` instead of directly typing the URL. I think this is better because I can change the URL later without changing every link.

For example, if I change `/movies` to `/films`, the links using `route()` can follow the new route. But if I used hard-coded URLs, I would have to change the links manually in my Blade files.
