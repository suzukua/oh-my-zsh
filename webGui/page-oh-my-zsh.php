<?php
// Minimal responsive settings page for oh-my-zsh (tile structure)
?>
<div class="page" id="ohmyzsh-settings">
  <div class="page-title"><h1>oh-my-zsh</h1></div>

  <div class="tile">
    <div class="tile-header">
      <div class="tile-header-left">
        <div class="tile-header-main">
          <span class="tile-title">Zsh Environment</span>
          <div class="tile-subtitle">管理 oh-my-zsh 插件与 root shell 配置</div>
        </div>
      </div>
      <div class="tile-header-right">
        <button id="ohmyzsh-refresh" class="btn btn-primary">刷新状态</button>
        <button id="ohmyzsh-setup" class="btn btn-secondary">执行 setup</button>
      </div>
    </div>

    <div class="tile-content">
      <div id="ohmyzsh-status">
        <div class="table-wrapper">
          <table class="ohmyzsh-table">
            <thead><tr><th>项</th><th>状态</th></tr></thead>
            <tbody>
              <tr><td>oh-my-zsh 目录</td><td id="status-omz">检测中…</td></tr>
              <tr><td>.zshrc</td><td id="status-zshrc">检测中…</td></tr>
              <tr><td>zsh 可用</td><td id="status-zshbin">检测中…</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="ohmyzsh-actions">
        <p>说明：这些动作会调用插件脚本（请在终端或插件日志中查看输出）。页面不会直接执行高权限操作；点击“执行 setup”仅会提示您在终端运行提供的 setup 脚本，或可由管理员在控制台手动运行。</p>
      </div>
    </div>
  </div>

  <link rel="stylesheet" href="/plugins/oh-my-zsh/webGui/oh-my-zsh.css">
  <script>
    // minimal client behavior: this page does not invoke privileged API by default
    document.getElementById('ohmyzsh-refresh').addEventListener('click', function() {
      alert('刷新状态仅为界面触发示意。请在服务器终端运行检查脚本获取真实状态。');
    });
    document.getElementById('ohmyzsh-setup').addEventListener('click', function() {
      if (!confirm('将在服务器上执行 setup（需要管理员权限）。请在终端运行 /boot/config/plugins/oh-my-zsh/setup.sh 来执行。继续？')) return;
      alert('请在服务器终端运行：/boot/config/plugins/oh-my-zsh/setup.sh');
    });
  </script>
</div>
