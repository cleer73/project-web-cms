<div class="row">
  <div class="sixteen columns">
    <h1>Admin: Articles</h1>

    <p>[
      <a href="/admin/">Home</a> |
      <a href="/admin/article/create">Create an Article</a>
    ]</p>

    <hr/>

    <form action="/admin/article/search" method="GET">
      <input id="query" name="q" type="text">
      <button class="button" type="submit">Search</button>
    </form>

    <?php if(count($articles) > 0): ?>
    <table class="table">
      <tbody>
        <?php foreach($articles as $a): ?>
        <tr>
          <td>
            <h4><a href="/admin/article/update/<?= $a['id'] ?>"><?= $a['title'] ?></a></h4>
            <?= $a['excerpt'] ?>
          </td>
          <td style="width: 225px;">
            <div class="alert info">
              <strong>Author</strong> <?= $a['author'] ?><br/>
              <strong>Type:</strong> <?= $a['type'] ?><br/>
              <strong>Status:</strong> <?= $a['status'] ?><br/>
              <strong>Created</strong> <?= $a['created_on'] ?><br/>
              <strong>Modified</strong> <?= $a['modified_on'] ?>
            </div>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php else: ?>
    <p class="alert info"><strong>Attention!</strong> You currently have no articles. <a href="/admin/article/create">You should write something</a>.</p>
    <?php endif; ?>

  </div>
</div>
