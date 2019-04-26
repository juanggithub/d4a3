pipeline{
                environment{
                                registry = "juanggithub/d4a"
                                registryCredential = "Amaralgauto1"
                        }
        agent any
        stages{
                        stage('Starting'){
                                steps{
                                        sh 'echo starting...'
                                }
                        }
                        stage('Checking Docker'){
                                steps{
                                        sh 'sudo docker ps'
                                }
                        }
                        stage('Building Image'){
                                steps{
                                       script{
                                                                                                dockerImage=docker.build registry + ": $BUILDNUMBER"
                                        }
                                                                        }
                        }
                                                stage('Push Image DockerHub'){
                                                                steps{
                                                                                script{
                                                                                        docker.withRegistry('',registryCredential)

                                                                                                dockerImage.push()
                                                                                }
                                                                }
                        }
		}
}

