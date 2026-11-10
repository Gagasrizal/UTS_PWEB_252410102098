<style>
:root{--primary:#0f766e;--primary-dark:#115e59;--bg:#f1f5f9;--card:#ffffff;--text:#1e293b;--muted:#64748b;--border:#e2e8f0}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;background:var(--bg);color:var(--text);min-height:100vh;display:flex;flex-direction:column}
main{flex:1;width:100%;max-width:960px;margin:0 auto;padding:24px 16px}
h1{font-size:1.6rem;margin-bottom:4px}
h2{font-size:1.1rem;margin-bottom:8px}
.sub{color:var(--muted);margin-bottom:20px}
.card{background:var(--card);border:1px solid var(--border);border-radius:12px;padding:20px}
.grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:20px}
.stat strong{display:block;font-size:2rem;color:var(--primary)}
.stat span{color:var(--muted);font-size:.9rem}
.navbar{background:var(--primary);color:#fff}
.navbar .inner{max-width:960px;margin:0 auto;padding:12px 16px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:8px}
.brand{font-weight:700;font-size:1.2rem}
.menu{display:flex;flex-wrap:wrap;gap:4px}
.menu a{color:#fff;text-decoration:none;padding:6px 12px;border-radius:8px;font-size:.95rem}
.menu a:hover,.menu a.active{background:var(--primary-dark)}
.footer{text-align:center;padding:16px;color:var(--muted);font-size:.85rem;border-top:1px solid var(--border);background:var(--card)}
label{display:block;margin-bottom:6px;font-weight:600}
input{width:100%;padding:10px 12px;border:1px solid var(--border);border-radius:8px;font-size:1rem;margin-bottom:12px}
input:focus,.btn:focus,.menu a:focus{outline:2px solid var(--primary);outline-offset:2px}
.btn{display:inline-block;width:100%;padding:10px;background:var(--primary);color:#fff;border:0;border-radius:8px;font-size:1rem;text-align:center;text-decoration:none;cursor:pointer}
.btn:hover{background:var(--primary-dark)}
.btn-auto{width:auto;padding:10px 18px;margin-top:12px}
.error{color:#b91c1c;font-size:.85rem;margin:-6px 0 12px}
.login-box{max-width:380px;margin:8vh auto 0}
.table-wrap{overflow-x:auto}
table{width:100%;border-collapse:collapse}
th,td{text-align:left;padding:10px 12px;border-bottom:1px solid var(--border);white-space:nowrap}
th{background:#f8fafc;font-size:.85rem;color:var(--muted)}
.badge{padding:2px 10px;border-radius:999px;font-size:.8rem;font-weight:600}
.ok{background:#dcfce7;color:#166534}
.habis{background:#fee2e2;color:#991b1b}
.avatar{width:72px;height:72px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:2rem;font-weight:700;margin-bottom:12px}
.profile-row{display:flex;justify-content:space-between;gap:12px;padding:10px 0;border-bottom:1px solid var(--border)}
@media (max-width:640px){.grid{grid-template-columns:1fr}h1{font-size:1.3rem}}
</style>
