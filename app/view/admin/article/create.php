<div class="row remove-bottom">
  <div class="sixteen columns">

    <h1>Admin: Create an Article</h1>

    <p>[
      <a href="/admin/">Home</a>
    ]</p>

    <hr/>

  </div>
</div>

<form method="post" action="/admin/article/create">
<div class="row remove-bottom">
  <div class="sixteen columns">
    <label for="article-title">Title</label>
    <input id="article-title" name="article[title]" type="text">
  </div>
</div>
<div class="row">
  <div class="four columns">
    <label for="article-author">Author</label>
    <input id="article-author" name="article[author]" type="text">

    <label for="article-excerpt">Excerpt</label>
    <textarea id="article-excerpt" name="article[excerpt]" rows="5"></textarea>

    <div class="row">
      <div class="two columns alpha">
        <fieldset>
          <legend>Type</legend>
          <label for="article-type-post">
            <input id="article-type-post" name="article[type]" type="radio" value="post" checked>
            <span>Post</span>
          </label>
          <label for="article-type-page">
            <input id="article-type-page" name="article[type]" type="radio" value="page">
            <span>Page</span>
          </label>
        </fieldset>
      </div>
      <div class="two columns omega">
        <fieldset>
          <legend>Status</legend>
          <label for="article-status-draft">
            <input id="article-status-draft" name="article[status]" type="radio" value="draft" checked>
            <span>Draft</span>
          </label>
          <label for="article-status-publish">
            <input id="article-status-publish" name="article[status]" type="radio" value="publish">
            <span>Publish</span>
          </label>
        </fieldset>
      </div>

      <button class="button" type="submit">Save Article</button>
    </div>
  </div>
  <div class="twelve columns">
    <label for="article-content">Content</label>
    <textarea id="article-content" name="article[content]" rows="25"></textarea>
  </div>
</div>
</form>
