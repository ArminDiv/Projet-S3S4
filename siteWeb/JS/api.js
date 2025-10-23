const API_BASE = "https://teamjardin.epizy.com/api";

async function createClient(data) {
  const res = await fetch(`${API_BASE}/clients/create.php`, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data),
  });
  if (!res.ok) throw new Error("Erreur API");
  return res.json();
}

// Exemple d’usage
createClient({ raison_sociale: "ACME Jardin", contact_email: "contact@acme.fr" })
  .then(console.log)
  .catch(console.error);


async function ping() {
  try {
    const res = await fetch(`${API_BASE}/health.php`);
    const data = await res.json();
    document.querySelector("#result").textContent = JSON.stringify(data, null, 2);
  } catch (e) {
    document.querySelector("#result").textContent = "Erreur: " + e.message;
  }
}
document.addEventListener("DOMContentLoaded", ping);
