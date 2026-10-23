(() => {
  const path = window.location.pathname.toLowerCase();
  const trackMeta = (...args) => {
    if (typeof window.fbq === "function") window.fbq(...args);
  };
  const trackGoogle = (eventName, parameters = {}) => {
    if (typeof window.gtag === "function") window.gtag("event", eventName, parameters);
  };

  if (path.endsWith("/catalog.html") || path.endsWith("/catalog")) {
    trackMeta("track", "ViewContent", {
      content_name: "GP Supply & Lumber Catalog",
      content_category: "Product Catalog"
    });
    trackGoogle("view_item_list", {
      item_list_name: "GP Supply & Lumber Catalog"
    });
  }

  document.addEventListener("click", (event) => {
    const link = event.target.closest("a");
    if (!link) return;

    const href = link.href || "";

    if (link.classList.contains("gp-shop-instock") || href.includes("paladinshop.com/Store")) {
      trackMeta("track", "InitiateCheckout", {
        content_name: "Paladin Shop",
        content_category: "In-Stock Products"
      });
      trackGoogle("begin_checkout", {
        link_url: href,
        link_text: link.textContent.trim()
      });
      return;
    }

    if (href.startsWith("tel:")) {
      trackMeta("track", "Contact", { contact_method: "phone" });
      trackGoogle("generate_lead", { contact_method: "phone" });
      return;
    }

    if (href.includes("google.com/maps")) {
      trackMeta("trackCustom", "GetDirections");
      trackGoogle("get_directions", { link_url: href });
      return;
    }

    if (href.includes("instagram.com/gpsupplyandlumber")) {
      trackMeta("trackCustom", "InstagramVisit");
      trackGoogle("social_click", {
        social_network: "Instagram",
        link_url: href
      });
    }
  });
})();
