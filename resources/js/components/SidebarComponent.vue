<template>
  <div class="sidebar">
    <ul class="sidebar-content">
      <li><router-link to="/counselings" class="text-primary">カウンセリング</router-link></li>
      <li><router-link to="/expenses" class="text-primary">経費</router-link></li>
      <li><router-link to="/problems" class="text-primary">悩み</router-link></li>
      <li><router-link to="/calendars" class="text-primary">カレンダー</router-link></li>
      <li><router-link to="/admins" class="text-primary">管理者</router-link></li>
      <li><router-link to="/users" class="text-primary">生徒一覧</router-link></li>
      <li><router-link to="/tasks" class="text-primary">イベント一覧</router-link></li>
    </ul>
  </div>
</template>

<style scoped>
.sidebar {
  position: fixed;
  width: var(--sidebar-width);
  height: 100%;
  top: var(--navbar-height);
  left: 0;
  z-index: 98;
  background-color: var(--surface-card);
  border-right: 1px solid var(--surface-border);
  transition: transform 0.4s cubic-bezier(0.05, 0.74, 0.2, 0.99);
}

.sidebar-content {
  overflow-y: auto;
  height: 100%;
  margin: 0;
  margin-top: 1rem;
  list-style: none;
  padding-bottom: 120px;
}
</style>