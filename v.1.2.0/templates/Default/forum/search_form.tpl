<div class="df-card" style="margin-bottom: 24px;">
    <div class="df-card-body" style="padding: 20px;">
        <form action="{SITEURL}index.php" method="GET" style="display: flex; gap: 15px; margin: 0; align-items: center;">
            <input type="hidden" name="do" value="forum">
            <input type="hidden" name="action" value="search">
            <div class="df-search-input-wrap" style="flex: 1; position: relative;">
                <i class="fa fa-search" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: var(--df-text-muted); font-size: 16px;"></i>
                <input type="text" name="q" class="df-search-input" placeholder="Forumda konu veya kelime ara..." required style="padding-left: 45px; height: 50px; font-size: 15px;">
            </div>
            <button type="submit" class="df-btn df-btn-primary" style="height: 50px; padding: 0 30px; font-size: 15px;">
                <i class="fa fa-search"></i> Ara
            </button>
        </form>
    </div>
</div>
