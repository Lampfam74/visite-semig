#!/bin/bash

set -e  # Arrêter le script en cas d'erreur

echo "Déploiement..."

# Connexion au serveur distant
ssh raho2855@votre-serveur-o2switch << 'EOF'
  cd ~/sites/visite-semig

  echo "🌀 Pull du code depuis Git..."
  git pull origin main

  echo "📦 Installation des dépendances PHP..."
  if [ -f composer.lock ]; then
    composer install
  fi

  echo "🔑 Configuration de l'environnement..."
  if [ ! -f .env ]; then
    cp .env.example .env
    php artisan key:generate
  fi

  echo "🧹 Nettoyage du cache Laravel..."
  php artisan cache:clear

  echo "📂 Lien de stockage public..."
  php artisan storage:link

  echo "🧬 Migration de la base de données..."
  php artisan migrate --force

  echo "🌐 Installation des dépendances Node.js..."
  npm install

  echo "🛠 Compilation des assets frontend..."
  npm run build

  echo "✅ Déploiement terminé."
EOF
