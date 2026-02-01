<?php
// 🔥 ফায়ারবেজ কনফিগ (PHP সুরক্ষার জন্য) 🔥
$firebaseConfig = [
  "apiKey" => "AIzaSyCmKEHLFXgX0N35FzmnJPSdxMnOYxEtn4k",
  "authDomain" => "earning-hub-3334a.firebaseapp.com",
  "databaseURL" => "https://earning-hub-3334a-default-rtdb.firebaseio.com",
  "projectId" => "earning-hub-3334a",
  "storageBucket" => "earning-hub-3334a.firebasestorage.app",
  "messagingSenderId" => "725656866022",
  "appId" => "1:725656866022:web:bed6bbaefde1e2423dbf27",
  "measurementId" => "G-4SKL5KQG8N"
];
?>

<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <title>Premium Earning Bot | Full Version</title>
  
  <!-- 🔥 মনিট্যাগ SDK স্ক্রিপ্ট অ্যাডমিন প্যানেল থেকে ডায়নামিকভাবে লোড হবে 🔥 -->

  <meta property="og:title" content="🔥 সেরা আর্নিং অ্যাপ! টাকা আয় করুন সহজে।" />
  <meta property="og:image" content="https://files.catbox.moe/fu7hoj.jpg" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  
  <style>
    /* === 🎨 FULL PREMIUM CSS (No Lines Cut) 🎨 === */
    *{margin:0;padding:0;box-sizing:border-box}
    body{font-family:'Nunito',sans-serif;background:#f4f4f9;color:#1c1c1e;transition:all .3s; -webkit-user-select: none; user-select: none; overflow-x: hidden;}
    #app{max-width:500px;margin:0 auto;padding-bottom:86px;min-height:100vh; position: relative;}

    /* 🔥 ড্যাশবোর্ড গ্রিড (পাশাপাশি কার্ড) 🔥 */
    .stats-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; 
        gap: 12px;
        margin-bottom: 15px;
    }

    /* 🔥 HIGH QUALITY PAGE ANIMATION 🔥 */
    .page {
        display: none;
        opacity: 0;
    }
    .page.active {
        display: block;
        animation: premiumSlide 0.6s cubic-bezier(0.23, 1, 0.32, 1) forwards;
    }
    @keyframes premiumSlide {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* BOOT OVERLAY */
    #boot-overlay{position:fixed;inset:0;z-index:3000;display:flex;align-items:center;justify-content:center;background:radial-gradient(1000px 600px at 80% -10%, rgba(124,77,255,.18), transparent 60%),radial-gradient(800px 500px at 10% 120%, rgba(46,221,235,.12), transparent 60%),rgba(0,0,0,.65);backdrop-filter:saturate(160%) blur(6px);}
    .boot-card{width:90%;max-width:420px;padding:28px;border-radius:18px;text-align:center;background:linear-gradient(180deg,#1c1c1e,#141414);color:#fff;box-shadow:0 24px 60px rgba(0,0,0,.45);}
    .boot-logo{width:66px;height:66px;border-radius:50%;display:grid;place-items:center;margin:0 auto 14px;background:conic-gradient(from 0deg, #6d5dfc, #4f46e5, #30d158, #6d5dfc);animation:spin 2.2s linear infinite;}
    .boot-logo i{font-size:28px;color:#fff}
    .boot-progress{height:6px;border-radius:999px;background:rgba(255,255,255,0.1);margin-top:20px;overflow:hidden}
    .boot-bar{height:100%;width:20%;background:linear-gradient(90deg,#6d5dfc,#4f46e5);animation:loaderBar 1.5s infinite}
    @keyframes loaderBar{0%{transform:translateX(-100%)}100%{transform:translateX(400%)}}
    @keyframes spin{to{transform:rotate(360deg)}}

    /* HEADER */
    .profile-header{padding:20px 15px;display:flex;align-items:center;gap:15px; background: #fff; border-bottom: 1px solid #eee; position: sticky; top: 0; z-index: 100;}
    #user-photo{width:60px;height:60px;border-radius:50%;object-fit:cover;border:2px solid #007aff; box-shadow: 0 4px 10px rgba(0,0,0,0.1);}
    .user-details h1{font-size:1.1rem;font-weight:700}
    .user-details p{font-size:.85rem;font-weight:600;color:#6d6d72}

    main{padding:15px}
    h2{font-size:1.6rem;margin-bottom:15px; color: #2c3e50;}

    /* CARDS */
    .stat-card{padding:15px;border-radius:12px;text-align:center;background:#fff;border:1px solid #e0e0e0; box-shadow: 0 4px 6px rgba(0,0,0,0.02); margin-bottom: 5px;}
    .stat-card h3{font-size:.75rem; color:#6d6d72; margin-bottom:8px; text-transform: uppercase;}
    .stat-card p{font-size:1.2rem;font-weight:700;color:#007aff}

    /* FORMS */
    .form-group{margin-bottom:15px;text-align:left;}
    .form-group label{display:block;margin-bottom:5px;font-weight:700;font-size:0.9rem;}
    .form-group input, .form-group select{width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;font-size:1rem;background:#f9f9f9; outline: none; transition: 0.3s;}
    .form-group input:focus{border-color: #007aff; background: #fff;}

    .action-btn{width:100%;padding:15px;font-size:1rem;font-weight:700;color:#fff;border:none;border-radius:12px;cursor:pointer;background: linear-gradient(135deg, #007aff, #0051af); transition: 0.3s; box-shadow: 0 5px 15px rgba(0,122,255,0.3); display: flex; justify-content: center; align-items: center; gap: 8px;}
    .action-btn:active{transform: scale(0.97);}
    .action-btn:disabled {background: #ccc; cursor: not-allowed;}

    /* 🔥 CORNER TOAST ALERTS 🔥 */
    .toast-container { position: fixed; top: 20px; right: 20px; z-index: 9999; }
    .toast { background: #fff; color: #333; padding: 12px 20px; border-radius: 10px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); margin-bottom: 10px; border-left: 5px solid #007aff; animation: toastIn 0.5s ease forwards, toastOut 0.5s 3.5s ease forwards; display: flex; align-items: center; gap: 10px; font-weight: bold; }
    @keyframes toastIn { from { transform: translateX(100%); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
    @keyframes toastOut { to { transform: translateX(100%); opacity: 0; } }

    /* 🔥 AD TIMER OVERLAY 🔥 */
    #ad-timer-overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.95); z-index: 6000; display: none; align-items: center; justify-content: center; flex-direction: column; color: #fff; }
    .timer-circle { width: 100px; height: 100px; border: 4px solid #007aff; border-radius: 50%; display: grid; place-items: center; font-size: 2.5rem; font-weight: 800; margin-bottom: 20px; }

    /* HISTORY SECTION */
    .history-card{background: #fff; padding: 15px; border-radius: 12px; border: 1px solid #eee; margin-top: 10px;}
    .history-item{display: flex; justify-content: space-between; align-items: center; padding: 12px 0; border-bottom: 1px solid #f0f0f0;}
    .status-tag {padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: bold; text-transform: uppercase;}
    .tag-pending {background: #fff3cd; color: #856404;}
    .tag-completed {background: #d4edda; color: #155724;}

    /* MODAL */
    .custom-overlay{position:fixed;inset:0;background:rgba(0,0,0,0.6);z-index:2000;display:none;place-items:center;padding:16px;}
    .custom-overlay.show{display:grid}
    .custom-modal{width:100%;max-width:400px;background:#fff;border-radius:22px;overflow:hidden;box-shadow:0 25px 70px rgba(0,0,0,0.4); animation: premiumPop 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);}
    @keyframes premiumPop { from { transform: scale(0.7); opacity: 0; } to { transform: scale(1); opacity: 1; } }

    /* NAV BAR */
    .bottom-nav{position:fixed;left:0;right:0;bottom:0;width:100%;max-width:500px;margin:0 auto;display:flex;justify-content:space-around;padding:12px;background:rgba(255,255,255,0.95);backdrop-filter: blur(10px);border-top: 1px solid #eee;z-index:1000;}
    .nav-btn{border:none;background:none;display:flex;flex-direction:column;align-items:center;color:#8e8e93;cursor:pointer;flex:1; transition: 0.3s;}
    .nav-btn.active{color:#007aff; transform: translateY(-5px);}
    .nav-btn i{font-size:1.3rem;margin-bottom:4px;}
    .nav-btn span{font-size:0.7rem;font-weight:700;}
    
    /* SUPPORT & TASK BUTTONS */
    .support-link-btn, .task-item {
        display: flex; align-items: center; gap: 15px; padding: 15px; background: #fff; border-radius: 12px; margin-bottom: 10px; border: 1px solid #eee; text-decoration: none; color: inherit;
    }
    .support-link-btn i, .task-icon { font-size: 24px; color: #007aff; }
    .task-details { flex-grow: 1; }
    .task-details h4 { font-size: 1rem; }
    .task-details p { font-size: 0.8rem; color: #666; }
    .task-action .action-btn { padding: 8px 15px; font-size: 0.9rem; }

  </style>
</head>
<body>
  
  <div id="toast-container" class="toast-container"></div>

  <!-- অ্যাড টাইমার স্ক্রিন -->
  <div id="ad-timer-overlay">
      <div class="timer-circle" id="timer-count">15</div>
      <h2>বিজ্ঞাপন লোড হচ্ছে...</h2>
      <p>পুরো সময় বিজ্ঞাপনটি দেখুন। শেষ হলে টাকা যোগ হবে।</p>
  </div>

  <!-- বুট স্ক্রিন -->
  <div id="boot-overlay">
    <div class="boot-card">
      <div class="boot-logo"><i class="fa-solid fa-bolt"></i></div>
      <div class="boot-title">লোড হচ্ছে...</div>
      <div class="boot-sub">আপনার প্রিমিয়াম ড্যাশবোর্ড তৈরি হচ্ছে</div>
      <div class="boot-progress"><div class="boot-bar"></div></div>
    </div>
  </div>

  <div id="app" style="visibility:hidden">
    <header class="profile-header">
      <div class="profile-info">
        <img id="user-photo" src="https://via.placeholder.com/60" alt="User" />
        <div class="user-details">
          <h1 id="user-name">Loading...</h1>
          <p>ব্যালেন্স: <span id="user-balance" style="color:#007aff">0.00</span> টাকা 💰</p>
        </div>
      </div>
    </header>

    <main>
      <div id="home-page" class="page active">
        <h2>ড্যাশবোর্ড</h2>
        <div class="stats-grid">
            <div class="stat-card"><h3>ক্লিক</h3><p id="total-clicks">0</p></div>
            <div class="stat-card"><h3>মোট আয়</h3><p id="total-earning">0.00</p></div>
            <div class="stat-card"><h3>লিমিট</h3><p><span id="daily-ads-watched">0</span> / <span id="daily-ads-limit">0</span></p></div>
            <div class="stat-card"><h3>রেফারেল</h3><p id="referral-count">0</p></div>
        </div>
        <div class="stat-card">
            <h3>রেফার লিংক</h3>
            <p id="referral-description" style="font-size: 14px; color: #555; margin-bottom: 12px; line-height: 1.5;"></p>
            <p style="font-size:12px; margin-bottom:10px;">বোনাস: <span id="ref-bonus-display">0</span> টাকা</p>
            <input type="text" id="referral-link" readonly style="width:100%; padding:12px; border-radius:10px; border:1px dashed #007aff; text-align:center; margin-bottom:15px; background:#f4f4f9;">
            <button class="action-btn" id="copy-ref-btn"><i class="fas fa-copy"></i> কপি করুন</button>
        </div>
      </div>

      <div id="withdraw-page" class="page">
        <h2>টাকা উত্তোলন</h2>
        <div class="stat-card"><p>ব্যালেন্স: <b id="withdraw-balance" style="color:#007aff">0.00</b> TK</p></div>
        <form id="withdraw-form" class="stat-card">
            <div class="form-group"><label>মেথড:</label><select id="withdraw-method" required></select></div>
            <div class="form-group"><label>নম্বর:</label><input type="text" id="account-number" placeholder="017xxxxxxxx" required /></div>
            <div class="form-group"><label>পরিমাণ:</label><input type="number" id="amount" placeholder="৫০০" required /></div>
            <button type="submit" class="action-btn" id="submit-withdraw-btn"><i class="fas fa-paper-plane"></i> রিকোয়েস্ট পাঠান</button>
        </form>
        <div style="margin-top: 25px;"><h3 style="margin-bottom:10px;"><i class="fas fa-history"></i> ইতিহাস</h3><div id="withdraw-history-list" class="history-card"></div></div>
      </div>

      <div id="support-page" class="page">
        <h2>সাপোর্ট</h2>
        <div id="dynamic-links-container"></div>
      </div>

      <div id="tasks-page" class="page">
          <h2>টাস্ক সেন্টার</h2>
          <div class="stat-card">
              <i class="fas fa-video" style="font-size:3rem; color:#007aff; margin-bottom:10px;"></i>
              <h3>বিজ্ঞাপন দেখুন</h3>
              <p>রিওয়ার্ড: <span id="ad-price-display">0</span> টাকা</p>
              <button class="action-btn" id="watch-ad-btn">বিজ্ঞাপন দেখুন (১৫ সে.)</button>
          </div>
          <div id="dynamic-tasks-container" style="margin-top: 20px;"></div>
      </div>
    </main>

    <nav class="bottom-nav">
      <button class="nav-btn active" data-page="home-page"><i class="fas fa-home"></i><span>হোম</span></button>
      <button class="nav-btn" data-page="support-page"><i class="fas fa-headset"></i><span>সাপোর্ট</span></button>
      <button class="nav-btn" data-page="tasks-page"><i class="fas fa-tasks"></i><span>টাস্ক</span></button>
      <button class="nav-btn" data-page="withdraw-page"><i class="fas fa-wallet"></i><span>উত্তোলন</span></button>
    </nav>
  </div>

  <div id="custom-overlay" class="custom-overlay">
    <div class="custom-modal">
      <div style="background:linear-gradient(135deg, #007aff, #0051af); padding:20px; color:#fff; text-align:center;"><h3 id="custom-modal-title">নোটিশ</h3></div>
      <div id="custom-modal-body" style="padding: 30px; text-align:center; font-weight: 700; line-height: 1.5;"></div>
      <div style="padding: 15px; border-top: 1px solid #eee;"><button class="action-btn" onclick="document.getElementById('custom-overlay').classList.remove('show')">ঠিক আছে</button></div>
    </div>
  </div>

  <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
  <script src="https://telegram.org/js/telegram-web-app.js"></script>

  <script>
    const firebaseConfig = <?php echo json_encode($firebaseConfig); ?>;
    firebase.initializeApp(firebaseConfig);
    const db = firebase.database();
    const tg = window.Telegram.WebApp;

    let appConfig = {}, currentUser = null, userId = null;

    function showToast(msg) {
        const container = document.getElementById('toast-container');
        const toast = document.createElement('div');
        toast.className = 'toast';
        toast.innerHTML = `<i class="fas fa-info-circle"></i> <span>${msg}</span>`;
        container.appendChild(toast);
        setTimeout(() => toast.remove(), 4000);
    }

    function showPopup(title, body) {
      document.getElementById('custom-modal-title').innerText = title;
      document.getElementById('custom-modal-body').innerText = body;
      document.getElementById('custom-overlay').classList.add('show');
    }

    document.addEventListener('DOMContentLoaded', async () => {
      tg.expand();
      
      // --- 💡 চূড়ান্ত সমাধান: শুধুমাত্র টেলিগ্রামের ভেতর থেকে অ্যাপ চালু নিশ্চিত করা ---
      // এই কোডটি এখন কঠোরভাবে পরীক্ষা করবে যে অ্যাপটি টেলিগ্রামের ভেতরে চলছে কি না।
      // `tg.initData` হলো সবচেয়ে নির্ভরযোগ্য প্রমাণ। এটি খালি থাকলে, তার মানে অ্যাপটি বাইরে থেকে খোলা হয়েছে।
      // এর ফলে কোনোভাবেই আর Guest ইউজার তৈরি হবে না।
      
      if (tg.initData && tg.initDataUnsafe && tg.initDataUnsafe.user && tg.initDataUnsafe.user.id) {
        // ব্যবহারকারীর তথ্য সঠিকভাবে পাওয়া গেছে, অ্যাপ লোড হবে।
        userId = tg.initDataUnsafe.user.id.toString();
        document.getElementById('user-name').innerText = tg.initDataUnsafe.user.first_name || 'Telegram User';
        if(tg.initDataUnsafe.user.photo_url) {
            document.getElementById('user-photo').src = tg.initDataUnsafe.user.photo_url;
        }
      } else {
        // ব্যবহারকারীর তথ্য পাওয়া যায়নি। অ্যাপটি ব্লক করে দেওয়া হবে এবং একটি সতর্কবার্তা দেখানো হবে।
        document.getElementById('boot-overlay').innerHTML = `
          <div class="boot-card" style="background: linear-gradient(180deg, #e74c3c, #c0392b);">
            <div class="boot-logo" style="background: #fff; animation: none;">
                <i class="fa-solid fa-lock" style="color: #e74c3c;"></i>
            </div>
            <div class="boot-title" style="margin-top: 15px;">প্রবেশাধিকার সুরক্ষিত</div>
            <div class="boot-sub" style="font-size: 14px; line-height: 1.6;">এই অ্যাপটি ব্যবহার করার জন্য, অনুগ্রহ করে আপনার টেলিগ্রাম অ্যাপে থাকা বটের মাধ্যমে এটি চালু করুন। সরাসরি ব্রাউজারে এটি কাজ করবে না।</div>
          </div>`;
        return; // এখানে কোডের 실행 বন্ধ হয়ে যাবে।
      }
      // --- সমাধান শেষ ---

      await fetchConfig();
      await initUserInDb();

      document.getElementById('boot-overlay').style.display = 'none';
      document.getElementById('app').style.visibility = 'visible';
      
      if (appConfig.welcomeMessage) {
          showPopup('স্বাগতম 📢', appConfig.welcomeMessage);
      }

      setupEventListeners();
      
      db.ref('users/' + userId).on('value', (s) => {
        currentUser = s.val();
        if(currentUser) {
            updateUI(currentUser);
            loadTasks();
            
            if (currentUser.hasUnseenReferral) {
                showPopup('নতুন রেফারেল!', 'অভিনন্দন! আপনার রেফারেল লিঙ্ক থেকে একজন নতুন ব্যবহারকারী জয়েন করেছে এবং আপনি বোনাস পেয়েছেন।');
                db.ref(`users/${userId}/hasUnseenReferral`).remove();
            }
        }
      });

      loadWithdrawHistory();
    });

    async function fetchConfig() {
      const snap = await db.ref('config').once('value');
      appConfig = snap.val() || {};
      
      if (appConfig.adZoneId) {
          const script = document.createElement('script');
          script.src = '//libtl.com/sdk.js';
          script.setAttribute('data-zone', appConfig.adZoneId);
          script.setAttribute('data-sdk', `show_${appConfig.adZoneId}`);
          document.head.appendChild(script);
      }

      document.getElementById('ad-price-display').innerText = appConfig.adValue || 0;
      document.getElementById('ref-bonus-display').innerText = appConfig.referralBonus || 0;
      document.getElementById('daily-ads-limit').innerText = appConfig.dailyAdLimit || 15;
      document.getElementById('referral-description').innerText = appConfig.referralDescription || 'আপনার বন্ধুদের রেফার করে আয় করুন।';
      
      const methods = document.getElementById('withdraw-method');
      methods.innerHTML = appConfig.withdrawMethods?.map(m => `<option value="${m.name}">${m.name} (মিন: ${m.min})</option>`).join('') || '';

      const supportContainer = document.getElementById('dynamic-links-container');
      supportContainer.innerHTML = '';
      if(appConfig.supportLinks) {
          appConfig.supportLinks.forEach(link => {
              const linkEl = document.createElement('a');
              linkEl.href = link.url;
              linkEl.className = 'support-link-btn';
              linkEl.target = '_blank';
              linkEl.innerHTML = `<i class="fas fa-headset"></i> <div><h4>${link.text}</h4></div>`;
              supportContainer.appendChild(linkEl);
          });
      }
    }
    
    async function initUserInDb() {
      const userRef = db.ref('users/' + userId);
      const snap = await userRef.once('value');
      const userName = tg.initDataUnsafe?.user?.first_name || 'Telegram User';

      if (!snap.exists()) {
        const userData = {
          id: userId, firstName: userName,
          balance: 0, totalEarnings: 0, totalClicks: 0, dailyAdsWatched: 0, referralCount: 0,
          joinedAt: firebase.database.ServerValue.TIMESTAMP
        };
        
        if(appConfig.adminId && appConfig.botToken) {
            const message = `🎉 নতুন ব্যবহারকারী!\n\nনাম: ${userName}\nID: ${userId}`;
            fetch(`https://api.telegram.org/bot${appConfig.botToken}/sendMessage?chat_id=${appConfig.adminId}&text=${encodeURIComponent(message)}`);
        }

        const refId = tg.initDataUnsafe?.start_param;
        if (refId && refId !== userId) {
            const bonus = parseFloat(appConfig.referralBonus || 0);
            await db.ref('users/' + refId).transaction((u) => {
                if(u) {
                    u.balance = (u.balance || 0) + bonus;
                    u.totalEarnings = (u.totalEarnings || 0) + bonus;
                    u.referralCount = (u.referralCount || 0) + 1;
                    u.hasUnseenReferral = true;
                }
                return u;
            });
            if(appConfig.botToken) {
                const refMessage = `🎉 অভিনন্দন! আপনার রেফারেল লিঙ্ক থেকে "${userName}" জয়েন করেছে এবং আপনি ${bonus.toFixed(2)} টাকা বোনাস পেয়েছেন।`;
                fetch(`https://api.telegram.org/bot${appConfig.botToken}/sendMessage?chat_id=${refId}&text=${encodeURIComponent(refMessage)}`);
            }
        }
        await userRef.set(userData);
      }
      document.getElementById('referral-link').value = `https://t.me/${appConfig.botUsername}?startapp=${userId}`;
    }

    function updateUI(u) {
      document.getElementById('user-balance').innerText = (u.balance || 0).toFixed(2);
      document.getElementById('withdraw-balance').innerText = (u.balance || 0).toFixed(2);
      document.getElementById('total-clicks').innerText = u.totalClicks || 0;
      document.getElementById('total-earning').innerText = (u.totalEarnings || 0).toFixed(2);
      document.getElementById('daily-ads-watched').innerText = u.dailyAdsWatched || 0;
      document.getElementById('referral-count').innerText = u.referralCount || 0;
    }

    async function watchAd() {
        if(currentUser.dailyAdsWatched >= (appConfig.dailyAdLimit || 15)) {
            showToast('আজকের লিমিট শেষ!');
            return;
        }

        const zoneId = appConfig.adZoneId;
        if (!zoneId) {
            showToast('বিজ্ঞাপন কনফিগার করা হয়নি।');
            return;
        }

        const adFunctionName = `show_${zoneId}`;
        const adUrl = `https://ovp667.com/4/${zoneId}`;

        if (typeof window[adFunctionName] === 'function') {
            window[adFunctionName]().catch(() => {
                if(tg.openLink) tg.openLink(adUrl); else window.open(adUrl, '_blank');
            });
        } else {
            if(tg.openLink) tg.openLink(adUrl); else window.open(adUrl, '_blank');
        }

        const overlay = document.getElementById('ad-timer-overlay');
        const timerTxt = document.getElementById('timer-count');
        let timeLeft = 15;

        overlay.style.display = 'flex';
        timerTxt.innerText = timeLeft;

        const timer = setInterval(async () => {
            timeLeft--;
            timerTxt.innerText = timeLeft;

            if(timeLeft <= 0) {
                clearInterval(timer);
                overlay.style.display = 'none';

                const reward = parseFloat(appConfig.adValue || 0);
                await db.ref('users/' + userId).transaction((u) => {
                    if(u) {
                        u.balance = (u.balance || 0) + reward;
                        u.totalEarnings = (u.totalEarnings || 0) + reward;
                        u.totalClicks = (u.totalClicks || 0) + 1;
                        u.dailyAdsWatched = (u.dailyAdsWatched || 0) + 1;
                    }
                    return u;
                });
                showToast(`অভিনন্দন! আপনি ${reward} টাকা পেয়েছেন।`);
            }
        }, 1000);
    }
    
    async function loadTasks() {
        const tasksContainer = document.getElementById('dynamic-tasks-container');
        const tasksRef = db.ref('config/tasks');
        const tasksSnap = await tasksRef.once('value');
        const tasks = tasksSnap.val();
        
        tasksContainer.innerHTML = '';
        if (!tasks) {
            tasksContainer.innerHTML = '<p style="text-align:center; color:#888;">আপাতত কোনো টাস্ক নেই।</p>';
            return;
        }

        const completedTasks = currentUser.completedTasks || {};

        for (const taskId in tasks) {
            const task = tasks[taskId];
            const isCompleted = completedTasks[taskId];

            const taskEl = document.createElement('div');
            taskEl.className = 'task-item';
            
            let buttonHtml;
            if (isCompleted) {
                buttonHtml = `<button class="action-btn" disabled><i class="fas fa-check"></i> কমপ্লিট</button>`;
            } else {
                buttonHtml = `<button class="action-btn" onclick="handleTask('${taskId}', '${task.url}', ${task.reward})">কাজ করুন</button>`;
            }

            taskEl.innerHTML = `
                <i class="fas fa-rocket task-icon"></i>
                <div class="task-details">
                    <h4>${task.name}</h4>
                    <p>বোনাস: ${task.reward} টাকা</p>
                </div>
                <div class="task-action" id="action-${taskId}">
                    ${buttonHtml}
                </div>`;
            tasksContainer.appendChild(taskEl);
        }
    }
    
    function handleTask(taskId, url, reward) {
        if (tg.openLink) {
            tg.openLink(url);
        } else {
            window.open(url, '_blank');
        }

        const actionContainer = document.getElementById(`action-${taskId}`);
        actionContainer.innerHTML = `<button class="action-btn" onclick="claimTaskReward('${taskId}', ${reward})">দাবি করুন</button>`;
    }

    async function claimTaskReward(taskId, reward) {
        const userTasksRef = db.ref(`users/${userId}/completedTasks/${taskId}`);
        const snap = await userTasksRef.once('value');
        if (snap.exists()) {
            showToast('এই টাস্ক আগেই সম্পন্ন হয়েছে!');
            return;
        }
        
        await db.ref('users/' + userId).transaction((u) => {
            if(u) {
                u.balance = (u.balance || 0) + reward;
                u.totalEarnings = (u.totalEarnings || 0) + reward;
                if(!u.completedTasks) u.completedTasks = {};
                u.completedTasks[taskId] = true;
            }
            return u;
        });

        showToast(`অভিনন্দন! আপনি ${reward} টাকা বোনাস পেয়েছেন।`);
    }

    async function handleWithdraw(e) {
        e.preventDefault();
        const amount = parseFloat(document.getElementById('amount').value);
        const method = document.getElementById('withdraw-method').value;
        const account = document.getElementById('account-number').value;

        if (!amount || !method || !account) {
            showToast('অনুগ্রহ করে সকল তথ্য পূরণ করুন।');
            return;
        }
        if (amount <= 0) {
            showToast('টাকার পরিমাণ সঠিক নয়।');
            return;
        }
        if (amount > currentUser.balance) {
            showToast('আপনার অ্যাকাউন্টে পর্যাপ্ত ব্যালেন্স নেই!');
            return;
        }

        const btn = document.getElementById('submit-withdraw-btn');
        btn.disabled = true;

        try {
            await db.ref(`users/${userId}/balance`).set(firebase.database.ServerValue.increment(-amount));
            const requestKey = db.ref('withdrawals/pending').push().key;
            await db.ref(`withdrawals/pending/${requestKey}`).set({
                id: requestKey, userId, amount, method, account, status: 'pending', timestamp: firebase.database.ServerValue.TIMESTAMP, userName: currentUser.firstName || 'User'
            });
            showToast('আপনার রিকোয়েস্ট সফলভাবে পাঠানো হয়েছে!');
            document.getElementById('withdraw-form').reset();
        } catch (error) {
            showToast('একটি সমস্যা হয়েছে, অনুগ্রহ করে আবার চেষ্টা করুন।');
            // Rollback balance if database write fails
            await db.ref(`users/${userId}/balance`).set(firebase.database.ServerValue.increment(amount));
        } finally {
            btn.disabled = false;
        }
    }

    function loadWithdrawHistory() {
        const paths = ['withdrawals/pending', 'withdrawals/completed', 'withdrawals/rejected'];
        const container = document.getElementById('withdraw-history-list');
        
        db.ref('withdrawals').orderByChild('userId').equalTo(userId).on('value', snap => {
            let allItems = [];
            snap.forEach(pathSnap => { // This will iterate through pending, completed, etc.
                 pathSnap.forEach(child => {
                    allItems.push(child.val());
                 });
            });

            allItems.sort((a, b) => b.timestamp - a.timestamp);

            if (allItems.length > 0) {
                container.innerHTML = allItems.map(w => {
                    let statusClass = 'tag-pending';
                    if (w.status === 'completed') statusClass = 'tag-completed';
                    
                    return `
                    <div class="history-item">
                        <div><b>${w.amount} TK</b><br><small>${w.method} - ${new Date(w.timestamp).toLocaleDateString('bn-BD')}</small></div>
                        <span class="status-tag ${statusClass}">${w.status}</span>
                    </div>`;
                }).join('');
            } else {
                container.innerHTML = '<p style="text-align:center;color:#999;">আপনার কোনো লেনদেনের ইতিহাস নেই।</p>';
            }
        });
    }

    function setupEventListeners() {
      document.querySelectorAll('.nav-btn').forEach(btn => {
        btn.onclick = (e) => {
          const pageId = e.currentTarget.dataset.page;
          document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
          document.getElementById(pageId).classList.add('active');
          document.querySelectorAll('.nav-btn').forEach(b => b.classList.remove('active'));
          e.currentTarget.classList.add('active');
        }
      });
      document.getElementById('watch-ad-btn').onclick = watchAd;
      document.getElementById('withdraw-form').onsubmit = handleWithdraw;
      document.getElementById('copy-ref-btn').onclick = () => {
          navigator.clipboard.writeText(document.getElementById('referral-link').value);
          showToast('রেফারেল লিংক কপি করা হয়েছে!');
      };
    }
  </script>
</body>
</html>