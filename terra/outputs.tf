output "ecs_cluster_name" {
  value = aws_ecs_cluster.app_cluster.name
}

output "ecr_repository_url" {
  value = aws_ecr_repository.php_app.repository_url
}

output "log_group" {
  value = aws_cloudwatch_log_group.ecs_log_group.name
}
