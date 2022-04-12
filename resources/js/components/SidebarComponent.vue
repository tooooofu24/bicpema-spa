<template>
  <div class="sidebar">
    <div class="sidebar-wrapper">
      <div class="sidebar-link-area">
        <!-- サイドバーメニュー -->
        <p><router-link to="/counselings" class="sidebar-link">カウンセリング</router-link></p>
        <p><router-link to="/expenses" class="sidebar-link">経費</router-link></p>
        <p><router-link to="/problems" class="sidebar-link">悩み</router-link></p>
        <p><router-link to="/calendars" class="sidebar-link">カレンダー</router-link></p>
        <p><router-link to="/admins" class="sidebar-link">管理者</router-link></p>
        <p><router-link to="/users" class="sidebar-link">生徒一覧</router-link></p>
        <p><router-link to="/tasks" class="sidebar-link">イベント一覧</router-link></p>
      </div>
    </div>
  </div>
</template>

<style>
.sidebar {
  background-color: #191970;
  height: 100%; /* サイドバーの高さ */
  width: 200px; /* サイドバーのwidthを指定 */
  max-width: 200px; /* widthの最大値 */
  opacity: 0.9.5; /* 透過する 0に近くほど透過する */
  position: fixed; /* 左上に要素を固定する(スクロールしても位置は固定される) */
  overflow-x: hidden; /* 横軸ではみ出た要素を非表示にする */
  box-sizing: border-box; /* paddingとborderを、widthとheightに含める */
  padding-left: 40px; /* サイドバー内のリンクの位置を右にずらす */
}

.sidebar-link-area {
  padding-top: 20px; /* サイドバーリンクの上部に空白を作る */
}

.sidebar-link {
  color: #ffffff; /* リンクの文字色を白に */
}

.sidebar-link:hover {
  color: #ffffff; /* マウスがリンクに乗った時も文字色を白に */
}
</style>