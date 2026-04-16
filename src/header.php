<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Produtos</title>
    <style>
        body { font-family: sans-serif; margin: 0; background: #f4f4f4; }
        nav { background: #2c3e50; padding: 15px; color: white; }
        nav a { color: white; text-decoration: none; margin-right: 20px; font-weight: bold; }
        .container { background: white; width: 80%; margin: 20px auto; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); min-height: 400px; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 4px; font-weight: bold; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>
<nav>
    <a href="relatorio.php">Relatório</a>
    <a href="insere.php">Novo Produto</a>
</nav>
<div class="container">
    <?php
require_once 'conecta.php';
$produtos = $pdo->query("SELECT * FROM produtos ORDER BY nome")->fetchAll();

// Sistema de Mensagens
$status = $_GET['msg'] ?? '';
$mensagens = [
    'sucesso' => 'Ação realizada com sucesso!',
    'excluido' => 'Produto removido do sistema.',
    'erro' => 'Erro ao processar solicitação.',
    'tabela_pronta' => 'Banco de dados configurado!'
];

include_once 'header.php';
?>

<h1>Relatório de Estoque</h1>

<?php if ($status && isset($mensagens[$status])): ?>
    <div class="alert <?= $status === 'erro' ? 'error' : 'success' ?>">
        <?= $mensagens[$status] ?>
    </div>
<?php endif; ?>

<table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
    <tr>
        <th>ID</th><th>Nome</th><th>Preço</th><th>Ações</th>
    </tr>
    <?php foreach($produtos as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= htmlspecialchars($p['nome']) ?></td>
        <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
        <td>
            <a href="altera.php?id=<?= $p['id'] ?>">Editar</a> |
            <form action="exclui.php" method="POST" style="display:inline" onsubmit="return confirm('Excluir?')">
                <button type="submit" name="id" value="<?= $p['id'] ?>">Excluir</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include_once 'footer.php'; ?>

<?php
require_once 'conecta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO produtos (nome, preco, quantidade) VALUES (?, ?, ?)");
        $stmt->execute([$_POST['nome'], $_POST['preco'], $_POST['quantidade']]);
        header("Location: relatorio.php?msg=sucesso");
        exit;
    } catch (Exception $e) {
        header("Location: relatorio.php?msg=erro");
    }
}
include_once 'header.php';
?>
<h2>Cadastrar Produto</h2>
<form method="POST">
    <input type="text" name="nome" placeholder="Nome" required><br><br>
    <input type="number" step="0.01" name="preco" placeholder="Preço" required><br><br>
    <input type="number" name="quantidade" placeholder="Quantidade" required><br><br>
    <button type="submit">Salvar</button>
</form>
<?php include_once 'footer.php'; ?>

<?php
require_once 'conecta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE produtos SET nome=?, preco=?, quantidade=? WHERE id=?");
    $stmt->execute([$_POST['nome'], $_POST['preco'], $_POST['quantidade'], $_POST['id']]);
    header("Location: relatorio.php?msg=sucesso");
    exit;
}

$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
$stmt->execute([$id]);
$p = $stmt->fetch();

include_once 'header.php';
?>
<h2>Alterar Produto</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?= $p['id'] ?>">
    <input type="text" name="nome" value="<?= $p['nome'] ?>" required><br><br>
    <input type="number" step="0.01" name="preco" value="<?= $p['preco'] ?>" required><br><br>
    <input type="number" name="quantidade" value="<?= $p['quantidade'] ?>" required><br><br>
    <button type="submit">Atualizar</button>
</form>
<?php include_once 'footer.php'; ?>

</div> <footer style="text-align: center; padding: 20px; color: #666;">
    <p>&copy; <?= date('Y') ?> - Aula de Back-end</p>
</footer>
</body>
</html>
