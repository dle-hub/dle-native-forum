<div class="df-side-item">
    <div class="df-side-avatar-wrap">
        <img src="{avatar}" class="df-side-avatar" alt="{author}">
    </div>
    <div class="df-side-info">
        <a href="{link}" class="df-side-title" title="{title}">{title}</a>
        <div class="df-side-meta">
            <span class="df-side-author">{author}</span>
            <span class="df-side-sep">•</span>
            <span class="df-side-cat">{category}</span>
        </div>
        <div class="df-side-stats">
            <i class="fa fa-reply"></i> {replies} Cevap <span class="df-side-sep">|</span> <i class="fa fa-calendar-o"></i> {date}
        </div>
    </div>
</div>
<style>

/* ---- SIDEBAR FORUM SON KONULAR BLOGU ---- */
.df-side-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 12px;
    background: var(--df-bg);
    border-bottom: 1px solid var(--df-border);
    transition: all 0.2s ease;
}

.df-side-item:last-child {
    border-bottom: none;
}

.df-side-item:hover {
    background: var(--df-bg-soft);
}

.df-side-avatar {
    width: 40px;
    height: 40px;
    border-radius: 4px;
    object-fit: cover;
    border: 1px solid var(--df-border);
}

.df-side-info {
    flex: 1;
    min-width: 0; /* Metin taşmasını önler */
}

.df-side-title {
    display: block;
    font-size: 13px;
    font-weight: 700;
    color: var(--df-text) !important;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 1.4;
    margin-bottom: 2px;
}

.df-side-title:hover {
    color: var(--df-accent) !important;
}

.df-side-meta {
    font-size: 11px;
    margin-bottom: 3px;
}

.df-side-author {
    color: var(--df-accent);
    font-weight: 700;
}

.df-side-sep {
    color: #cbd5e1;
    margin: 0 4px;
}

.df-side-cat {
    color: var(--df-text-muted);
}

.df-side-stats {
    font-size: 10px;
    color: #94a3b8;
    text-transform: uppercase;
    font-weight: 600;
}

.df-side-stats i {
    margin-right: 2px;
}

</style>